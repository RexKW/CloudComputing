<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function register(Request $request){
        if(User::where('studentEmail', $request->email)->exists()){
            return redirect()->back()->with('failUser', 'User Already Exist!');
        }

        if (!preg_match('/[A-Z]/', $request->password)) {
            return redirect()->back()->with('failInvalidCapitalPass', 'Password must contain at least one capital letter.');
        }

        if ($request->password != $request->confirmPassword){
            return redirect()->back()->with('failInvalidConfirmPass', 'Confirmation Password is invalid.');
        }
        
        $user = User::create([
                'name' => $request['name'],
                'studentEmail' => $request['studentEmail'],
                'password' => $request['password'],
                'birthdate' => $request['birthdate'],
        ]);

        Mail::to($request->email)->send(new TestMail($user));
        return redirect()->back()->with('success', 'Message successful! Please check your email for response.');
    }
}
