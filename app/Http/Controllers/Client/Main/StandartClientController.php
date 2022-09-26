<?php

namespace App\Http\Controllers\Client\Main;

use App\Http\Controllers\Controller;
use App\Models\v1\Standart;
use Illuminate\Http\Request;
use App\Models\v1\Category;
use App\Models\v1\Classification;
use App\Models\v1\DocType;
use Illuminate\Support\Facades\DB;

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
        $standarts = Standart::all();
        $categories = Category::all();
        $classifications = Classification::all();
        $doc_types = DocType::all();
        $search = $request->post('title');

        $standart = Standart::search($search);

        if ($request->title && $request->standart_number){
           $standart = DB::table('standarts')->select('*')->where('title', 'like', '%'.$request->title.'%')
               ->where('standart_number', 'like', '%'.$request->standart_number.'%')
                ->get();
        }

        elseif ($request->standart_number){
            $standart = DB::table('standarts')->select('*')->where('standart_number', 'like', '%'.$request->standart_number.'%')
                ->get();
        }

        elseif ($request->doc_type_id){
            $standart = DB::table('standarts')->select('*')->where('doc_type_id', 'like', '%'.$request->doc_type_id.'%')
                ->get();
        }
        return view('main.standarts.index',['standarts' => $standart,'categories' => $categories, 'classifications' => $classifications, 'doc_types' => $doc_types]);

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
