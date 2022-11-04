<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index(){
        $data = ['name'=>"A.rahman", 'data'=> "Hello AR"];
        $user['to']='mdabdurrahman542@gmail.com';
        Mail::send('mail', $data, function($message) use ($user){
            $message->to($user['to']);
            $message->subject('Hello AR');
        });
    }
}
