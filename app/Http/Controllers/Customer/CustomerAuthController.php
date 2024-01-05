<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerAuthController extends Controller
{
    public function login(Request $request): object
    {
        $customer = Customer::where('email', $request->email)->first();

        if ($customer) {
            if (password_verify($request->password, $customer->password)) {
                session(['customer' => $customer]);
                return response()->json([
                    'message' => 'Login berhasil'
                ], 200);
            }
        }

        return response()->json([
            'Email atau password salah'
        ], 422);
    }

    public function register(Request $request): object
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

        return response()->json([
            'message' => 'Register berhasil'
        ], 200);
    }

    public function logout()
    {
        session()->forget('customer');
        return redirect()->route('landing.en');
    }
}
