<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HangRequest extends FormRequest
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
            'txt_hang' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'txt_hang.required' => 'Bạn không được để trống tên hãng'
        ];
    }
}
