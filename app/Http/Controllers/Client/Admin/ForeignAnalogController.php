<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Controller;
use App\Models\v1\ForeignAnalog;
use Illuminate\Http\Request;
use App\Http\Requests\ForeignAnalogRequest;

class ForeignAnalogController extends Controller
{
    protected $foreign_analog = 'admin.foreign_analogs';

    public function index(){
        $foreign_analogs = ForeignAnalog::all();
        return view($this->foreign_analog.'.index',['foreign_analogs' => $foreign_analogs]);
    }

    public function create(){
        return view($this->foreign_analog.'.create');
    }

    public function store(ForeignAnalogRequest $request){
        $request = $request->except('_token');
        $foreign_analog = ForeignAnalog::create($request);
        if ($foreign_analog ==true){
            return redirect()->route('foreign_analogs.index');
        }
        else{
            return redirect()->back();
        }
    }

    public function edit($id){
        $foreign_analog = ForeignAnalog::select('*')->where('id',$id)->first();
        return view($this->foreign_analog.'.edit',['foreign_analog' => $foreign_analog]);
    }

    public function update($id,Request $request){
        $request = $request->except('_token');
        $foreign_analog = ForeignAnalog::select('*')->where('id',$id)->first();
        $foreign_analog->name = $request['name'];
        $foreign_analog = $foreign_analog->save();
        if($foreign_analog == true){
            return redirect()->route('foreign_analogs.index');
        }
    }

    public function destroy($id){
        $foreign_analog = ForeignAnalog::find($id);
        $foreign_analog->delete();
        if ($foreign_analog==true){
            return redirect()->route('foreign_analogs.index');
        }
        else{
            return redirect()->back();
        }
    }
}
