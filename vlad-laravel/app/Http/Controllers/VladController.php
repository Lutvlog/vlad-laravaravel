<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class VladController extends Controller
{
   public function submit(ContactRequest $request){

   $name = $request->input('name');
   $email = $request->input('email');
   $subject = $request->input('subject');
   $mes = $request->input('mes');


       Mail::to('lutvlog1@gmail.com')->send(new MailClass($name, $email,$subject,$mes));


   return redirect() -> route('contact')->with('success','Сообщение успешно отправлено');
   }
}
