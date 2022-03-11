<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StandartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'doc_type_id' => 'required',
            //'title' => 'required',
            //'photo_scope' => 'max:5120|mimes:jpeg,png,jpg',
            //'doc_standart' => 'max:5120|mimes:doc,docx',
            //'pdf_standart' => 'max:5120|mimes:pdf'
        ];
    }
}
