<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\Contact;
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
        $contact = Contact::create([
          ...$data,
          'status' => 'pending',
        ]);
        try {
        Mail::to('info@crackedegg.studio')->send(new ContactFormMail($data));
            return response()->json([
              'ok' => true,
              'message' => 'Thanks! Your message has been sent.',
            ]);
        } catch (Throwable $e) {
            report($e);

            return response()->json([
              'ok' => false,
              'message' => 'Sorry, we could not send your message right now. Please try again later.',
            ], 500);
        }

    }
}
