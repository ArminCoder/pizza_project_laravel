<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $contact = Contact::create([
            "name" => $request->name,
            "lname" => $request->lname,
            "email" => $request->email,
            "message" => $request->message
        ]);

        return response()->json($contact);
    }
}
