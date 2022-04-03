<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetailsRequest extends FormRequest
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
            'address'=> 'required',
            'phone' => 'required',
        ];
    }
    public function messages(){
        return[
            'address.required'=> 'this input mustn\'t be empty',
            'phone.required'=> 'this input mustn\'t be empty',
        ];
    }
}
