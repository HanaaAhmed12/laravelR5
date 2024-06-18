<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function contact(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'email' => 'required|email',
          'subject' => 'required',
          'message' => 'required',
        ]);

        $data = [
          'name' => $request->name,
          'email' => $request->email,
          'subject' => $request->subject,
          'message' => $request->message,

        ];

        try {
            Mail::to('Myemail@gmail.com')->send(new ContactMail($data));
            return redirect()->back()->with('message', 'Email successfully sent!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send email. Please try again later.');
        }


    }
}