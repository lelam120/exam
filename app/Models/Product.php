<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'ProductType' => 'required|alpha|max:3',
            'ProductCode' => 'required|alpha_num|max:6',
        ];
    }
}
