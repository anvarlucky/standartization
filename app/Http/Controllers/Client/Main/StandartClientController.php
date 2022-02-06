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

    public function search(Request $request)
    {
        $search = $request->post('search');
        $standart = Standart::search($search);
        return view('main.standarts.index', [
            'standarts' => $standart
        ]);
    }

    public function  show($id){
        $standart = Standart::select('*')->where('id',$id)->first();
        return view('main.standarts.show',['standart' => $standart]);
    }
    public function doc($id)
    {
        $standart = Standart::select('id','doc_standart')->where('id', $id)->first();
        return response()->download(public_path('storage/docstandart/'.$standart->doc_standart));
    }
    public function pdf($id)
    {
        $standart = Standart::select('id','pdf_standart')->where('id', $id)->first();
        return response()->download(public_path('storage/pdfstandart/'.$standart->pdf_standart));
    }
}
