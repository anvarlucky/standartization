<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Controller;
use App\Models\v1\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin.text_from_contacts.index',['contacts' => $contacts]);
    }


}
