<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class RegistrationCMSUsers extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|min:2',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
    }

    
}
