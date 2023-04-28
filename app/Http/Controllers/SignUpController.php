<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
        public function customerSignUp(Request $request)
        {
            $request->validate([
                'customer_name' => 'required',
                'customer_phone' => 'required',
                'customer_email' => 'required|email|unique:customers',
                'customer_username' => 'required',
                'customer_password' => 'required',
            ]);
            $input = $request->all();
            Customer::create($input);
            return redirect('/');
        }
}
