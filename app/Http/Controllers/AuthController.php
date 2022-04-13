<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    // all users
    public function allUsers()
    {
        return view('templates.users.list_users');
    }

    //login
    public function login(Request $request)
    {
        Validator::validate($request->all(), [
            'email' => ['email', 'required', 'min:3', 'max:50'],
            'password' => ['required', 'min:5']


        ], [
            'email.required' => 'this field is required',
            'email.min' => 'can not be less than 3 letters',

        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_active' => 1])) {


            if (Auth::user()->hasRole('admin'))
                return redirect()->route('admin');
            else
                return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with(['message' => 'incorerct username or password or your account is not active ']);
        }
    }

    // showlogin
    public function showLogin()
    {
        if (Auth::check())
            return redirect()->route($this->checkRole());
        else
            return view('templates.login');
    }


    // register

    public function register_user(Request $request)
    {
        Validator::validate($request->all(), [
            'name' => ['required', 'min:3', 'max:10'],
            'last_name' => ['required', 'min:3', 'max:10'],

            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:5'],
            'confirm_pass' => ['same:password']


        ], [
            'name.required' => 'this field is required',
            'name.min' => 'can not be less than 3 letters',
            'email.unique' => 'there is an email in the table',
            'email.required' => 'this field is required',
            'email.email' => 'incorrect email format',
            'password.required' => 'password is required',
            'password.min' => 'password should not be less than 3',
            'confirm_pass.same' => 'password dont match',


        ]);



        $u = new User();
        $u->name = $request->name;
        $u->last_name = $request->last_name;

        $u->password = Hash::make($request->password);
        $u->email = $request->email;
        if ($u->save())
            $u->attachedRole('admin');
        return redirect()->route('index')
            ->with(['success' => 'user created successful']);
        return back()->with(['error' => 'can not create user']);

        return view('templates.save_user');
    }

    // logout

    public function logout()
    {

        Auth::logout();
        return redirect()->route('login');
    }
}