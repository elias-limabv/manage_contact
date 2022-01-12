<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
                'name' => 'required|min:5',
                'email' => 'required|email|unique:contacts|max:255',
                'mobile' => 'required|min:9|max:9|unique:contacts',

                ];
    }

    public function messages()
    {
        return [
                    'name.required' => 'Name is required',
                    'email.required' => 'email is required',
                    'mobile.required' => 'mobile is required',
                ];
        
    }
}
