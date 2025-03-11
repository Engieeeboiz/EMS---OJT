<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class ems_auth_controller extends Controller
{
    public function sign_in(Request $request) {

        // ADMIN CREDENTIALS
        $admin_username = config('auth.admin.ems_username');
        $admin_password = config('auth.admin.ems_password');


        if($request->auth_username == $admin_username && $request->auth_password == $admin_password) {

            session(['is_admin' => true]);
            return redirect(route('ems_homepage'));

        } else {

            return redirect(route('signin'))->with('error', 'Invalid Credentials');

        }
        // $request->validate([
        //     'auth_username' => 'required|string',
        //     'auth_password' => 'required|string',
        // ], [
        //     'auth_username.required' => 'Please provide your username',
        //     'auth_password.required' => 'Please provide your password',
        // ]);
    }
}
