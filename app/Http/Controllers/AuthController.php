<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\User;
use App\Notifications\WelcomeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $validateCredentials = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        if ($request->remember) {
            Cookie::queue('email_cookie', $request->email, 120);
            Cookie::queue('password_cookie', $request->password, 120);
        }

        if (Auth::attempt($validateCredentials, true)) {
            $usertype = Auth::user()->role;
            return view('index');
        }

        return redirect()->back()->withErrors(['auth' => 'Invalid email or password']);
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $validateCredentials = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password',
            'gender' => 'required',
            'date' => 'required|date|before:today|after:1900-01-01',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->dob = $request->date;
        try {
            $user->save();
            Mail::to($user->email)->send(new WelcomeEmail($user));
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['auth' => 'Email already exists']);
        }
        return redirect()->route('loginPage');
    }
    public function ProfileDetail(){
        $users = Auth::user();
        return view('Profile', ['users'=>$users]);
    }
    public function getUpdate($id){
        $users = Auth::user();
        $find_user = User::find($id);
        return view('UpdateProfile',['users'=>$users,'find_user'=>$find_user]);
    }
    public function updateProfile(Request $request, $id){
        $users = User::all();
         $request->validate([

            'name' => 'required|min:5',
            'email' => 'required|email',
            'gender' => 'required',
            'date' => 'required|date|before:today|after:1900-01-01',
        ]);
        $edit = User::find($id);
        $edit->name = $request->name;
        $edit->email = $request->email;
        $edit->gender = $request->gender;
        $edit->dob = $request->date;
        $edit->save();
        return redirect()->route('Profile',['users'=>$users]);
    }
}
