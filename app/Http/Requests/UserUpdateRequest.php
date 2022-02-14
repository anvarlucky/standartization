<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => 'required|min:3|max:15',
            'role_id' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:16',
            'password_confirm' => 'required|same:password|min:8|max:16'
        ];
    }
}
