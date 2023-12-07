<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate(["email" => "required", "password" => "required"]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->with(["message" => "Credenciais inválidas."]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "email" => "required|unique:users",
            "password" => "required",
            "confirm_password" => "required"
        ]);

        $password = $request->input("password");
        $confirm_password = $request->input("confirm_password");

        if ($password != $confirm_password)
            return redirect("user.register")->with(["message" => "As senhas não coincidem!"]);

        $user = new User();
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = Hash::make($request->input("password"));

        try {
            $user->save();
        } catch (QueryException $e) {
            if ($e->getCode() == 2300)
                return redirect("user.register")->with(["message" => "Erro ao realizar cadastro!"]);
        }

        return redirect("home");
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('user/login');
    }
}
