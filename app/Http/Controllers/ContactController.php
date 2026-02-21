<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller{
    public function send(Request $request)
    {
        $data = $request->validate([
          'first_name' => ['required', 'string', 'max:100'],
          'last_name'  => ['required', 'string', 'max:100'],
          'email'      => ['required', 'email', 'max:255'],
          'phone'      => ['required', 'string', 'max:50'],
          'message'    => ['required', 'string', 'max:5000'],
        ]);

        Mail::to('info@cracked.studio')->send(new ContactFormMail($data));

        return back()->with('success', 'Thanks! We received your message and will get back to you shortly.');
    }
}
