<?php

namespace App\Http\Requests\Books;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBooksRequest extends FormRequest
{


    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:150'],
            'description' => ['string', 'max:350'],
            'image_url' => ['required', 'mimes:png,jpeg', 'max:1000'],
            'author' => ['required', 'string', 'max:150'],
            'year' => ['required', 'integer'],
            'total' => ['required', 'integer', 'min:0']
        ];
    }
}
