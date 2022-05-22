<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function true()
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
            'name' => 'required|string',
            'address' => 'string|nullable',
            'surname' => 'string|nullable',
            'patronymic' => 'string|nullable',
            'age' => 'string|nullable',
            'gender' => 'string|nullable'


        ];
    }
}
