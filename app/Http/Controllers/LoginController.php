<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Http\Request;



use Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function adminLogin(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $admins = Admin::all();
        foreach($admins as $admin) {
                 if(($admin['admin_username'] == $request['username']) && ($admin['admin_password'] == $request['password'])) {
                     return view('admins/admin_homepage');
                 }
             }
        return back()->with("Message error");
    }

    public function customerLogin(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $customers = Customer::all();
        foreach($customers as $customer) {
            if(($customer['customer_username'] == $request['username']) && ($customer['customer_password'] == $request['password'])) {
                return view('customers/customer_homepage');
            }
        }
        return redirect()->back()->with("Message error");
    }
}
