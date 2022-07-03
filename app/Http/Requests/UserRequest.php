<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if ($this->method() == 'POST') {
            return [
                'name' => 'required|string|min:3|max:255',
                'email' => 'required|string|max:255|min:3',
                'note' => 'max:6000',


                'password' => 'required|string|min:4|confirmed',
            ];
        }

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'note' => 'max:6000',

        ];
    }
}
