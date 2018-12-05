<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
    public function register()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'category_id' => session('category')
        ]);
        auth()->login($user);
        auth()->guard('employer')->logout();
        return redirect('/projects');
    }
    public function login() 
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (auth()->attempt(request(['email', 'password']))) {
            auth()->guard('employer')->logout();
            return redirect('/projects');
        }
        else{
            return redirect('/login_scientists');
        }
    }
}
