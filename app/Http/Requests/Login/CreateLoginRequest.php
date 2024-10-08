<?php

namespace App\Http\Requests\Login;

use Illuminate\Foundation\Http\FormRequest;
use PharIo\Manifest\Email;

class CreateLoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function messages(){
        return [
            'email.required'=> 'Email không được để trống',
            'password.required'=> 'Mật khẩu không được để trống',
        ];
    }
}
