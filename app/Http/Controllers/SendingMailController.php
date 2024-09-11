<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\SendingEmail;
use Illuminate\Support\Facades\Mail;

class SendingMailController extends Controller
{
    public function index(){
 
    Mail::to("xiawzh1234@gmail.com")->send(new SendingEmail());
 
    return "Email telah dikirim";
 
  }
}