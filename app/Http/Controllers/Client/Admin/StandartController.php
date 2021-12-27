<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Controller;
use App\Models\v1\DocType;
use App\Models\v1\ForeignAnalog;
use Illuminate\Http\Request;
use App\Models\v1\Standart;
use App\Http\Requests\StandartRequest;

class StandartController extends Controller
{
    protected $standart = 'admin.standarts';

    public function index()
    {
        $standarts = Standart::all();
        return view($this->standart . '.index', ['standarts' => $standarts]);
    }

    public function create()
    {
        $doc_types = DocType::all();
        return view($this->standart . '.create', ['doc_types' => $doc_types]);
    }

    public function store(StandartRequest $request)
    {
        $requestAll = $request->except('_token');
        if($request->hasFile('photo_scope')) {
            $uploadFile = $request->file('photo_scope');
            $fileName = Standart::uploadPhotoScope($uploadFile);
            $requestAll['photo'] = $fileName;
        }
        if($request->hasFile('order_photo'))
        {
            $uploadFile = $request->file('doc_standart');
            $fileName = Standart::uploadDoc($uploadFile);
            $requestAll['doc_standart'] = $fileName;
        }
        if($request->hasFile('order_photo'))
        {
            $uploadFile = $request->file('pdf_standart');
            $fileName = Standart::uploadPdf($uploadFile);
            $requestAll['pdf_standart'] = $fileName;
        }
        $standart = Standart::create($requestAll);
        if ($standart == true) {
            return redirect()->route('standarts.index');
        } else {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $standart = Standart::select('*')->where('id', $id)->first();
        $doc_types = DocType::all();

        return view($this->standart.'.edit', ['standart' => $standart, 'doc_types' => $doc_types]);
    }

    public function update($id, Request $request)
    {
        $request = $request->except('_token');
        $standart = Standart::select('*')->where('id', $id)->first();
        $standart->name = $request['name'];
        $standart = $standart->save();
        if ($standart == true) {
            return redirect()->route('standarts.index');
        }
    }

    public function destroy($id)
    {
        $standart = Standart::find($id);
        $standart->delete();
        if ($standart == true) {
            return redirect()->route('standarts.index');
        } else {
            return redirect()->back();
        }
    }
}
