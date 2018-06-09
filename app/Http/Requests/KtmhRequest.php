<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KtmhRequest extends FormRequest
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
            'txt_ktmh' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'txt_ktmh.required' => 'Bạn không được để trống ô kích thước màn hình'
        ];
    }
}
