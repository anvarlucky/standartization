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


    public function show($id){
        $standart = Standart::where('id',$id)->first();
        return view($this->standart.'.show', ['standart' => $standart]);
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

    public function create()
    {
        $doc_types = DocType::all();
        return view($this->standart . '.create', ['doc_types' => $doc_types]);
    }

    public function store(StandartRequest $request)
    {
        $requestAll = $request->except('_token');
        $standart = new Standart;
        if($request->hasFile('photo_scope') == true) {
            $uploadFile = $request->file('photo_scope');
            $fileName = Standart::uploadPhotoScope($uploadFile);
            $requestAll['photo_scope'] = $fileName;
        }

        else{
            $fileName = null;
        }

        //
        if($request->hasFile('photo_normative_references') == true) {
            $uploadFile = $request->file('photo_normative_references');
            $fileName = Standart::uploadPhotoNormative($uploadFile);
            $requestAll['photo_normative_references'] = $fileName;
        }

        else{
            $fileName = null;
        }

        if($request->hasFile('photo_classifications') == true) {
            $uploadFile = $request->file('photo_classifications');
            $fileName = Standart::uploadPhotoClassifications($uploadFile);
            $requestAll['photo_classifications'] = $fileName;
        }

        else{
            $fileName = null;
        }

        if($request->hasFile('photo_technical_requirement') == true) {
            $uploadFile = $request->file('photo_technical_requirement');
            $fileName = Standart::uploadPhotoTechnical($uploadFile);
            $requestAll['photo_technical_requirement'] = $fileName;
        }

        else{
            $fileName = null;
        }

        if($request->hasFile('photo_safety_requirement') == true) {
            $uploadFile = $request->file('photo_safety_requirement');
            $fileName = Standart::uploadPhotoSafety($uploadFile);
            $requestAll['photo_safety_requirement'] = $fileName;
        }

        else{
            $fileName = null;
        }

        if($request->hasFile('photo_acceptance_rules') == true) {
            $uploadFile = $request->file('photo_acceptance_rules');
            $fileName = Standart::uploadPhotoRules($uploadFile);
            $requestAll['photo_acceptance_rules'] = $fileName;
        }

        else{
            $fileName = null;
        }

        if($request->hasFile('photo_control_method') == true) {
            $uploadFile = $request->file('photo_control_method');
            $fileName = Standart::uploadPhotoControl($uploadFile);
            $requestAll['photo_control_method'] = $fileName;
        }

        else{
            $fileName = null;
        }

        if($request->hasFile('photo_appendix_a_reference') == true) {
            $uploadFile = $request->file('photo_appendix_a_reference');
            $fileName = Standart::uploadPhotoAppendix($uploadFile);
            $requestAll['photo_appendix_a_reference'] = $fileName;
        }

        else{
            $fileName = null;
        }

        if($request->hasFile('photo_bibliography') == true) {
            $uploadFile = $request->file('photo_bibliography');
            $fileName = Standart::uploadPhotoBibliography($uploadFile);
            $requestAll['photo_bibliography'] = $fileName;
        }

        else{
            $fileName = null;
        }

        if($request->hasFile('photo_bibliography_data') == true) {
            $uploadFile = $request->file('photo_bibliography_data');
            $fileName = Standart::uploadPhotoBibliographyData($uploadFile);
            $requestAll['photo_bibliography_data'] = $fileName;
        }

        else{
            $fileName = null;
        }
        //

        if($request->hasFile('doc_standart') == true)
        {
            $uploadFile = $request->file('doc_standart');
            $fileName = Standart::uploadDoc($uploadFile);
            $requestAll['doc_standart'] = $fileName;
        }
        else{
            $fileName = null;
        }
        if($request->hasFile('pdf_standart') == true)
        {
            $uploadFile = $request->file('pdf_standart');
            $fileName = Standart::uploadPdf($uploadFile);
            $requestAll['pdf_standart'] = $fileName;
        }
        else{
            $fileName = null;
        }
        $standart = Standart::create($requestAll);

        /*$standart->title = $request->title;
        $standart->doc_type_id = $request->doc_type_id;
        $standart->developed_organization = $request->developed_organization;
        $standart->organization = $request->organization;
        $standart->approved = $request->approved;
        $standart->entry_into_force = $request->entry_into_force;
        $standart->previous_edit = $request->previous_edit;
        $standart->status = $request->status;
        $standart->foreign_analogs = $request->foreign_analogs;
        $standart->pages = $request->pages;
        $standart->which_instead_standart = $request->which_instead_standart;
        $standart->scope = $request->scope;
        $standart->photo_scope = $request->photo_scope;
        $standart->normative_references = $request->normative_references;
        $standart->photo_normative_references = $request->photo_normative_references;
        $standart->classifications = $request->classifications;
        $standart->photo_classifications = $request->photo_classifications;
        $standart->technical_requirement = $request->technical_requirement;
        $standart->photo_technical_requirement = $request->photo_technical_requirement;
        $standart->safety_requirement = $request->safety_requirement;
        $standart->photo_safety_requirement = $request->photo_safety_requirement;
        $standart->acceptance_rule = $request->acceptance_rule;
        $standart->photo_acceptance_rules = $request->photo_acceptance_rules;
        $standart->control_method = $request->control_method;
        $standart->photo_control_method = $request->photo_control_method;
        $standart->appendix_a_reference = $request->appendix_a_reference;
        $standart->photo_appendix_a_reference = $request->photo_appendix_a_reference;
        $standart->bibliography = $request->bibliography;
        $standart->photo_bibliography = $request->photo_bibliography;
        $standart->bibliography_data = $request->bibliography_data;
        $standart->photo_bibliography_data = $request->photo_bibliography_data;
        $standart->doc_standart = $request->doc_standart;
        $standart->pdf_standart = $request->pdf_standart;
        $standart->save();*/
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
        $standart->title = $request['title'];
        $standart->description = $request['description'];
        $standart->doc_type_id = $request['doc_type_id'];
        $standart->developed_organization = $request['developed_organization'];
        $standart->organization = $request['organization'];
        $standart->approved = $request['approved'];
        $standart->entry_into_force = $request['entry_into_force'];
        $standart->previous_edit = $request['previous_edit'];
        $standart->status = $request['status'];
        $standart->foreign_analogs = $request['foreign_analogs'];
        $standart->pages = $request['pages'];
        $standart->which_instead_standart = $request['which_instead_standart'];
        $standart->scope = $request['scope'];
        $standart->normative_references = $request['normative_references'];
        $standart->classifications = $request['classifications'];
        $standart->technical_requirement = $request['technical_requirement'];
        $standart->safety_requirement = $request['safety_requirement'];
        $standart->acceptance_rule = $request['acceptance_rule'];
        $standart->control_method = $request['control_method'];
        $standart->appendix_a_reference = $request['appendix_a_reference'];
        $standart->bibliography = $request['bibliography'];
        $standart->bibliography_data = $request['bibliography_data'];
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
