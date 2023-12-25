<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerAuthController extends Controller
{
    public function login(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();

        if ($customer) {
            if (password_verify($request->password, $customer->password)) {
                session(['customer' => $customer]);
                return redirect()->route('landing.en');
            }
        }

        return redirect()->route('landing.en')->with('error', 'Email atau password salah');
    }

    public function register(Request $request)
    {

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'phone_number' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:customers',
        //     'password' => 'required|string|min:8',
        // ]);


        $customer = Customer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'status' => 1,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('landing.en');
    }

    public function logout()
    {
        session()->forget('customer');
        return redirect()->route('landing.en');
    }
}
