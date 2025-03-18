<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UniITRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'f_name'=>'required',
            'l_name'=>'required',
            'password' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            'email'=>'required|email',
            'uni_id'=>'required',
            'name'=>'required',
            'Logo'=>'required',
            
        ];
    }
}
