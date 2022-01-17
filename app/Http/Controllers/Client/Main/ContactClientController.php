<?php

namespace App\Http\Controllers\Client\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactClientController extends Controller
{
    public function index(){
        return view('main.contacts.index');
    }
}
