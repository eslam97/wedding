<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DashboardRequest extends FormRequest
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
            'name'=> 'required|max:191|unique:halls_without:id',
            'img' => 'required_without:id|mimes:jpg,jpeg,png',
            'price' => 'required|integer',
            'actual_price' => 'required'
        ];
    }
    public function messages(){
        return[
            'name.required'=> 'this input mustn\'t be empty',
            'img.required_without'=> 'this input mustn\'t be empty',
            'img.mimes'=> 'please update photos only',
            'price.required'=> 'this input mustn\'t be empty',
            'price.integer'=> 'this input must be numbers only',
            'name.unique' => 'this podcast is already exists',
            'name.max' => 'this input must be less than 191 characters',
            'actual_price.required'=> 'this input mustn\'t be empty'
        ];
    }
}
