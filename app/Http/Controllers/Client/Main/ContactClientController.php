<?php

namespace App\Http\Controllers\Client\Main;

use App\Http\Controllers\Controller;
use App\Models\v1\Contact;
use Illuminate\Http\Request;

class ContactClientController extends Controller
{
    public function index(){
        return view('main.contacts.index');
    }

    public function create(){
        return view('main.contacts.index');
    }

    public function store(Request $request){
        $contact = new Contact();
        $contact->full_name = $request['full_name'];
        $contact->phone_number = $request['phone_number'];
        $contact->e_mail = $request['e_mail'];
        $contact->text = $request['text'];
        $contact->save();
        if ($contact == true){
            return redirect()->route('contacts.index');
        }
    }
}
