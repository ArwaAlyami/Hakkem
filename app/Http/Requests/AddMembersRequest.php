<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class AddMembersRequest extends FormRequest
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
            'f_name'=>'required',
            'l_name'=>'required',
            'pass' => [
            'required',
            'string',
            Password::min(8)               // الحد الأدنى 8 حروف
                ->mixedCase()             // لازم حروف كبيرة وصغيرة
                ->numbers()               // لازم يحتوي على أرقام
                ->symbols(),               // لازم يحتوي على رموز مثل @#$%
            ],
            'email'=>'required|email',
            'department'=>'required',
            'rank'=>'required',

        ];
    }
}
