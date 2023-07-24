<?php

namespace App\Http\Controllers\Domain;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function show()
    {
        return view("domain.fa.pages.contact-us.index");
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            "fullname" => ["sometimes"],
            "email" => ["sometimes"],
            "phone_number" => ["required","max:11"],
            "text" => ["required","min:5"]
                ]);
        Contact::create(
            [
                "fullname" => $request->fullname,
                "email" => $request->email,
                "phone_number" => $request->phone_number,
                "content" => $request->text
            ]
        );
        return back()->with("message","با تشکر از پیام شما");
    }
}
