<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserInfoRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => [ 'required', 'string', 'max:100'],
            'age' => ['required', 'integer', 'max:100'],
            'country' => ['required', 'string', 'max:30'],
            'hobby' => ['required', 'string', 'max:150'],
            'aboutme' => ['nullable', 'string', 'max:300'],
            'avatar' => ['required', 'image', 'mimes:png,jpeg', 'max:2000'],
            'resume' => ['required', 'mimes:pdf', 'max:1000']
        ];
    }
}
