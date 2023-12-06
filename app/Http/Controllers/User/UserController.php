<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function login(): View
    {
        return view('user.login');
    }

    public function register(): View
    {
        return view("user.register");
    }

    public function authenticate(Request $request): View
    {
        $request->validate(["email" => "required", "password" => "required"]);

        return view();
    }

    public function store(Request $request): View
    {
        $request->validate(["name" => "required", "email" => "required", "password" => "required", "confirm_password" => "required"]);

        $password = $request->input("password");
        $confirm_password = $request->input("confirm_password");

        if ($password != $confirm_password)
            return view("user.register");

        $user = new User();
        $user->name = $request->input("name");
        $user->email = $request->input("email");

        return view();
    }


}
