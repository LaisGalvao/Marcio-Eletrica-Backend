<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendUserData;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function sendMail(Request $request)
    {
        Mail::to('laisgbueno62@gmail.com')->send(
            new sendUserData($request->all())
        );
        return response($request);
    }
}
