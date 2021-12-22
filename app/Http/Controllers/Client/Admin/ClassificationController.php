<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Controller;
use App\Models\v1\Category;
use Illuminate\Http\Request;
use App\Models\v1\Classification;
use App\Http\Requests\ClassificationRequest;

class ClassificationController extends Controller
{
    protected $classification = 'admin.classifications';

    public function index(){
        $classifications = Classification::all();
        return view($this->classification.'.index',['classifications' => $classifications]);
    }

    public function create(){
        $categories = Category::all();
        return view($this->classification.'.create',['categories' => $categories]);
    }

    public function store(ClassificationRequest $request){
        $request = $request->except('_token');
        $classification = Classification::create($request);
        if ($classification ==true){
            return redirect()->route('classifications.index');
        }
        else{
            return redirect()->back();
        }
    }

    public function edit($id){
        $classification = Classification::select('*')->where('id',$id)->first();
        $categories = Category::all();
        return view($this->classification.'.edit',['classification' => $classification,'categories' => $categories]);
    }

    public function update($id,Request $request){
        $request = $request->except('_token');
        $classification = Classification::select('*')->where('id',$id)->first();
        $classification->name = $request['name'];
        $classification->category_id = $request['category_id'];
        $classification = $classification->save();
        if($classification == true){
            return redirect()->route('classifications.index');
        }
    }

    public function destroy($id){
        $classification = Classification::find($id);
        $classification->delete();
        if ($classification==true){
            return redirect()->route('classifications.index');
        }
        else{
            return redirect()->back();
        }
    }
}
