<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {

    }
    //admin
    public function loginAdmin(){
        return view('admin.auth.login');
    }
    public function logoutAdmin(){}
    public function postLoginAdmin(Request $request){
        dd($request);
    }
    //customer
    public function loginCustomer(){
        return view('customer.auth.login');
    }
    public function logoutCustomer(){}
    public function postLoginCustomer(Request $request){
        dd($request);
    }
}
