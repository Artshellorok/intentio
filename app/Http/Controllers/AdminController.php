<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Employer;

class AdminController extends Controller
{
    public function register()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $employer = Employer::create([
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        auth()->guard('employer')->login($employer);
        auth()->logout();
        return redirect('/project_create');
    }
    public function login() 
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (auth()->guard('employer')->attempt(request(['email', 'password']))){
            auth()->logout();
            return redirect('/projects');
        }
        else{
            return redirect('/login_business');
        }
    }
}
