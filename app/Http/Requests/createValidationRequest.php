<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createValidationRequest extends FormRequest
{

    public function authorize()
    {
        return false;
    }
    public function rules()
    {
        return [
               'name'=>'required|alpha',
               'surname'=>'required|alpha',
               'cellphone'=>'required',
               'email'=>'required|email'
           ];
    }
}
