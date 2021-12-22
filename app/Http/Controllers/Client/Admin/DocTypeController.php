<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Controller;
use App\Models\v1\Classification;
use Illuminate\Http\Request;
use App\Models\v1\DocType;
use App\Http\Requests\DocTypeRequest;

class DocTypeController extends Controller
{
    protected $doc_type = 'admin.doc_types';

    public function index(){
        $doc_types = DocType::all();
        return view($this->doc_type.'.index',['doc_types' => $doc_types]);
    }

    public function create(){
        $classifications = Classification::all();
        return view($this->doc_type.'.create',['classifications' => $classifications]);
    }

    public function store(DocTypeRequest $request){
        $request = $request->except('_token');
        $doc_type = DocType::create($request);
        if ($doc_type ==true){
            return redirect()->route('doctypes.index');
        }
        else{
            return redirect()->back();
        }
    }

    public function edit($id){
        $doc_type = DocType::select('*')->where('id',$id)->first();
        $classifications = Classification::all();
        return view($this->doc_type.'.edit',['doc_type' => $doc_type,'classifications' => $classifications]);
    }

    public function update($id,Request $request){
        $request = $request->except('_token');
        $doc_type = DocType::select('*')->where('id',$id)->first();
        $doc_type->name = $request['name'];
        $doc_type->classification_id = $request['classification_id'];
        $doc_type = $doc_type->save();
        if($doc_type == true){
            return redirect()->route('doctypes.index');
        }
    }

    public function destroy($id){
        $doc_type = DocType::find($id);
        $doc_type->delete();
        if ($doc_type==true){
            return redirect()->route('doctypes.index');
        }
        else{
            return redirect()->back();
        }
    }
}
