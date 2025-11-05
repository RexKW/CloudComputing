<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\SendMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use function Laravel\Prompts\alert;

class MailController extends Controller
{
    public function store(Request $request){

        $mail = SendMail::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'subject' => $request['subject'],
                'content' => $request['content'],
        ]);
    }

    public function SendEmail(Request $request){
        Mail::to($request->email)->send(new TestMail($request));
        return redirect()->back()->with('success', 'Message successful! Please check your email for response.');
    }

}
