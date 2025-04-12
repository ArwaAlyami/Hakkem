<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
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
            'password' => [
            'required',
            'string',
            'min:12',
            'max:16',
            'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*#).+$/'
          ],
/**(?=.*[a-z]) يجب أن يحتوي على حرف صغير واحد على الأقل

(?=.*[A-Z]) يجب أن يحتوي على حرف كبير واحد على الأقل

(?=.*#) يجب أن يحتوي على الرمز #

.+ أي محتوى من الأحرف

^ و $ لتحديد بداية ونهاية السلسلة */
            'email'=>'required|email'
        ];
    }
}
