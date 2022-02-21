<?php

namespace App\Http\Controllers\Client\Main;

use App\Http\Controllers\Controller;
use App\Models\v1\Standart;
use Illuminate\Http\Request;
use App\Models\v1\Category;
use App\Models\v1\Classification;
use App\Models\v1\DocType;

class StandartClientController extends Controller
{
    public function index()
    {
        $standarts = Standart::all();
        $categories = Category::all();
        $classifications = Classification::all();
        $doc_types = DocType::all();
        return view('main.standarts.index',['standarts' => $standarts,'categories' => $categories, 'classifications' => $classifications, 'doc_types' => $doc_types]);
    }

    public function search(Request $request)
    {
        //$search = $request->except('_token');
        $search = [
            'title' => $request['title'],
            'description' => $request['description'],
            'doc_type_id' => $request['doc_type_id'],
            'standart_number' => $request['standart_number']
        ];
        //dd($search);
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
