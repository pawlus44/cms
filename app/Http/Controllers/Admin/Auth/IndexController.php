<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\Admin\RegistrationCMSUsers;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /*
     * Display login form to admin
     */

    public function login()
    {
        return view('admin.auth.login');
    }

    /*
     * Display registration form to admin
     */
    public function registration()
    {
        return view('admin.auth.registration');
    }

    /*
     * Registration new user in storkCMS - not in website!
     */
    public function registrationProceed(RegistrationCMSUsers $request){

        $dataUser = $request->all();
        $dataUser['password'] = Hash::make($dataUser['password']);

        $data = ['status' => 'success',
                 'message' => 'test'];

        return response()->json($data);

    }
}
