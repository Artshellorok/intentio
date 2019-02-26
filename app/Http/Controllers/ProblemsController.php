<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Problem;
use \App\Category;
class ProblemsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:employer')->except(['index', 'show','offer']);
        $this->middleware('auth')->only(['offer']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $categories = Category::all();
        if($category->exists){
            $problems = $category->problems->sortByDesc('created_at');
        }
        else{
            $problems = Problem::all()->sortByDesc('created_at');
        }
        return view('projects', compact('problems', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        if (request('dogovor') != 1) {
            $dogovor = 0;
        }
        else{
            $dogovor = request('dogovor');
        }
        $path = $request->file('image');
        $name = $request->file('image')->hashName();
        $image = \Image::make($path);
        $image->crop(900, 300, 0 ,0);
        $image->save("./uploads/$name");
        Problem::create([
            'title' => request('title'),
            'demands' => request('demand'),
            'budget' => request('budget'),
            'employer_id' => auth()->guard('employer')->user()->id,
            'category_id' => request('category_id'),
            'image' => "/uploads/$name",
            'dogovor' => $dogovor
        ]);
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Problem $problem)
    {
        return view('project', compact('problem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function offer(Problem $problem)
    {
        $problem->users()->attach(auth()->user()->id, ['offer' => request('offer'), 'status' => 'Рассматривается']);
        return back();
    }
    public function accept(Problem $problem)
    {
        $problem->users->find(request('user'))->pivot->status = 'Принято';
        $problem->users->find(request('user'))->pivot->update();
        return back();
    }
    public function decline(Problem $problem)
    {
        $problem->users->find(request('user'))->pivot->status = 'Отклонено';
        $problem->users->find(request('user'))->pivot->update();
        return back();
    }
}
