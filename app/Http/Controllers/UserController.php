<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::get(); //select * from users
        return view('admin.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //test the validation of the data 
        $message=[
            'name.required'=>'Pleas enter your name',
            'email.required'=>'pleas add your email',
            'email.unique'=>'Email already exist'
        ];
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ], $message);


        $user = new User();
        $user->name=$request->name;
        $user->email =$request->email;
        $user->user_name=$request->user_name;
        $user->password =$request->password;
        $user->save(); //save the data
        // return response('Data Inserted Succ'); //return
        return redirect('/admin/users');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=user::find($id);    //select * from user where id=$id
        return view('users.show',compact('user'));
    }   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
        return view('admin.edituser',compact('user'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=user::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->user_name=$request->user_name;
        $user->password=$request->password;
        $user->save();
        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=user::find($id)->delete();
        return redirect('/admin/users');
    }

    // public function showDeleted(){
    //     $user=user::onlyTrashed()->get();
    //     return view('users.trached',compact('user'));
    // }
    // public function restore(Request $request)
    // {
    // $id = $request->id;
    // user::where('id', $id)->restore();
    // return redirect('/admin/users');
    // }

    public function showLoginForm()
     {
         return view('auth.login');
     }
 
     
     public function login(Request $request)
     {
         $credentials = $request->validate([
             'email' => ['required', 'email'],
             'password' => ['required'],
         ]);
 
          // Logic for authentication here
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // If authentication is successful, redirect to /admin/users
            return view('dashboard'); 
        } else {
            // If login fails, redirect back with an error message
            return redirect()->back()->withErrors(['login' => 'Invalid credentials']);
           
         }
 
         return back()->withErrors([
             'email' => 'The provided credentials do not match our records.',
         ]);
     }

     public function showRegistrationForm()
    {
        return view('admin.addUser');
    }

    public function register(Request $request)
    {
        
        // Validate the form data
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create the new admin
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to the admin dashboard after registration
        return view('dashboard');
    }

    public function dashboard()
{
    return view('dashboard'); 
}
}
