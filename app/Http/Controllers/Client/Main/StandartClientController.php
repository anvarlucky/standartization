<?php

namespace App\Http\Controllers\Client\Main;

use App\Http\Controllers\Controller;
use App\Models\v1\Standart;
use Illuminate\Http\Request;

class StandartClientController extends Controller
{
    public function index()
    {
        $standarts = Standart::all();
        return view('main.standarts.index',['standarts' => $standarts]);
    }

    public function  show($id){
        $standart = Standart::select('*')->where('id',$id)->first();
        return view('main.standarts.show',['standart' => $standart]);
    }
}
