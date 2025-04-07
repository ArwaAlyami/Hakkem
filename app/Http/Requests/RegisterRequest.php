<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'First Name'=> 'required',
            'Last Name'=> 'required',
            'University Name'=> 'required',
            'Main Email'=> 'required|email',
            'University Logo'=> 'required',
            'password' => [
    'required',
    'string',
    'min:12',
    'max:16',
    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*#).+$/'
],
            'Confirm Password'=> 'required'
        ];
    }
}
