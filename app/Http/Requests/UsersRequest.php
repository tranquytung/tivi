<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the users is authorized to make this request.
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
            'txt_name'=>'required',
            'txt_email'=>'required',
            'txt_pass' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txt_name.required' => 'Bạn không được để trống tên admin',
            'txt_email.required' => 'Bạn không được để trống email',
            'txt_pass.required' => 'Bạn không được để trống mật khẩu'
        ];
    }
}
