<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {

    }
    public function index(){
       return view('admin.src.index');
    }
    /**
     * insert data to db
     *
     * @param integer $id
     */
    public function update(Request $request,$id){}
    /**
     * edit data to db
     *
     * @param integer $id
     */
    public function edit(Request $request,$id){}
    /**
     * delete data to db
     *
     * @param integer $id
     */
    public function delete($id){}
}
