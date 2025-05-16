<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMessageController extends Controller
{
    //
    function SendMessage(Request $request){
      $request->validate([
        'UserName'=>'required |min:3|max:12',
        'Email'=>'required |email' ,
        'Message'=>'required |max:100'

      ]);
      return back()->with('success','form submmitted successfully');
    }
}
