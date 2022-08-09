<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {

    }
    public function index(){
        return view('customer.src.index');
    }
    public function category(){
        return view('customer.src.categories');
    }
    public function cart(){

    }
    public function payment(){}
    public function contact(){
        return view('customer.src.contact');
    }
    public function detailProduct(){
        return view('customer.src.detail_product');
    }
}
