<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
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

    public function attributes()
    {
        return [
            'firstname' => 'imię',
            'lastname' => 'nazwisko',
            'email' => 'e-mail',
            'password' => 'hasło',
            'password_confirmation' => 'hasło'
        ];
    }
}
