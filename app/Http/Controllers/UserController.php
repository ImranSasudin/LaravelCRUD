<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,View, Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\User;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class UserController extends Controller
{
    public function index()
    {
        return view('users.login');
    }  
 
    public function registration()
    {
        return view('users.registration');
    }
     
    public function postLogin(Request $request)
    {
        request()->validate([
        'id' => 'required',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('id', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('employees.index');
        }
        return Redirect::to("users.login")->withSuccess('Oppes! You have entered invalid credentials');
    }
 
    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'password' => 'required',
        'role' => 'required',
        ]);
         
        $data = $request->all();
 
        User::create([
            'name' => $data['name'],
            'role' => $data['role'],
            'password' => Hash::make($data['password'])
          ]);
       
        return Redirect::route("employees.index")->withSuccess('Great! You have Successfully loggedin');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect()->route('users.login');
    }
}
