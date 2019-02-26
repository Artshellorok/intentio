<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Category;
use \App\Project;
use \App\Employer;
class ProjectsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->only(['create', 'store','accept','decline']);
        $this->middleware('auth:employer')->only(['offer']);
    }
    public function create()
    {
        return view('projects.create');
    }
    public function store(Request $request){
        $path = $request->file('image');
        $name = $request->file('image')->hashName();
        $image = \Image::make($path);
        $image->crop(900, 300, 0 ,0);
        $image->save("./uploads/$name");
        Project::create([
            'title' => request('title'),
            'description' => request('description'),
            'cost' => request('cost'),
            'image' => "/uploads/$name",
            'category_id' => request('category_id'),
            'user_id' => auth()->user()->id
        ]);
        return redirect('/developments');
    }
    public function index(Category $category)
    {
        $categories = Category::all();
        if($category->exists){
            $projects = $category->projects->sortByDesc('created_at');
        }
        else{
            $projects = Project::all()->sortByDesc('created_at');
        }
        return view('projects.index', compact('projects', 'categories'));
    }
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
    public function offer(Project $project)
    {
        $project->employers()->attach(auth()->guard('employer')->user()->id, ['offer' => request('offer'), 'status' => 'Рассматривается']);
        return back();
    }
    public function accept(Project $project)
    {
        $esketit = \DB::table('employer_project')->where('channel_id', request('relation'))->update(['status' => 'Принято']);
        return back();
    }
    public function decline(Project $project)
    {
        $esketit = \DB::table('employer_project')->where('channel_id', request('relation'))->update(['status' => 'Отклонено']);
        return back();
    }
}
