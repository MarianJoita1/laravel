<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index() {
        return view('index', [
            'heading' => 'users',
            'users' => User::latest()->filter(request(['search']))->get()
        ]);
    }

    public function create() {
        return view('register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['email', 'required', Rule::unique('users', 'email')],
            'password' => ['required','confirmed','min:6']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        
        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been Logged out');
    }

    public function login() {
        return view('login');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['email', 'required'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back();
    }

    public function delete(User $user) {
        $user->delete();
        return redirect('/');
    }
}
