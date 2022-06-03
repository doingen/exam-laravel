<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function add()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        $form = $request->all();
        Contact::create($form);
        return view('thanks');
    }
}
