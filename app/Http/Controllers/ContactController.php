<?php

namespace App\Http\Controllers;

use app\Mail\MessageReceived;
use Iluminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function storage (){
        $message=request()-> validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'subject'=> 'required',
            'content'=> 'required|min:5'
        ],[
            'name.required'=> 'Introducir tu nombre'
        ]);

        //enviar email
       // Mail::to('chabo.08@hotmail.com')-queue(new MessageReceived($message));


        return back()->with('status','Recibimos tu correo, responderemos lo antes posible');
    }
}
