<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'number'=> 'required',
            'desc'=> 'required',
            'img' => 'required_without:id|mimes:jpg,jpeg,png',
        ];
    }
    public function messages(){
        return[
            'number.required'=> 'this input mustn\'t be empty',
            'img.required_without'=> 'this input mustn\'t be empty',
            'desc.required'=> 'this input mustn\'t be empty',
            'img.mimes'=> 'please update photos only',
            'name.max' => 'this input must be less than 191 characters',
        ];
    }
}
