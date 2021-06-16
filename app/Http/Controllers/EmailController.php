<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\TestMail;

class EmailController extends Controller
{
    public function Email(){
        $detail = [
            'title' => 'adada',
            'body' => 'dasdaw'
        ];
        \Mail::to('rajuwahyudi842@gmail.com')->send(new TestMail($detail));
        return view('email.thanks');
    }
}
