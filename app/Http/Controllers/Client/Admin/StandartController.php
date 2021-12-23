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
        $request = $request->except('_token');
        $standart = Standart::create($request);
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
        return view($this->standart . '.edit', ['standart' => $standart, 'doc_types' => $doc_types]);
    }

    public function update($id, Request $request)
    {
        $request = $request->except('_token');
        $standart = Standart::select('*')->where('id', $id)->first();
        $standart->name = $request['name'];
        $standart->category_id = $request['category_id'];
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
