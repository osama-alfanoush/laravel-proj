<?php

namespace App\Http\Controllers\direction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactUsController extends Controller
{
    //
    public function index()
    {
        return view('contact.contact');
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->first_name = $request->input('first_name');
        $contact->last_name = $request->input('last_name');
        $contact->title = $request->input('title');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->commcent = $request->input('commcent');

        $contact->save();

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
