<?php

namespace App\Http\Controllers\Front;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{
    public function contact_mail(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect()->to('/'.'#contact')
                        ->withErrors($validator)
                        ->withInput();
        }
        $data = $request->all();
        $user_email="saikotkhan44@gmail.com";
        Mail::to($user_email)->send(new ContactMail($data));
        return redirect()->to('/'.'#contact')->with('success', 'Message sent successfully');

    }
}
