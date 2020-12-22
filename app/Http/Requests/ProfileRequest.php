<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,'.$this->id,
            'password' => 'nullable|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'حقل الاسم مطلوب',
            'email.required' => 'حقل البريد الالكتروني مطلوب',
            'email.email' => 'هذا الحقل يجب ان يكون بريد الالكتروني',
            'email.unique' => 'هذا الحقل موجود مسبقا',
            'password.confirmed' => 'كلمة السر غير مطابقة'
        ];
    }
}
