<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'=>'required|email',
            'f_name'=>'required',
            'l_name'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'department'=>'required',
            'IBAN'=>'required',
            'bachelors'=>'required',
            'masters'=>'required',
            'phd'=>'required',
            'Academic_quali'=>'required',
            'rank'=>'required',
            'User_Type'=>'required',

            // 'Feedback_quality'=>'required',
            // 'accuracy'=>'required',
            // 'response_speed'=>'required',


        ];
    }
}
