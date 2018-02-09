<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    public function index(){
        $supplier=Supplier::all();
        return $supplier;
    }
    public function create(){
        //
    }
    public function store(Request $request){
        //
    }
    public function show($id){
        //
    }
    public function update(){
      //  
    }
    public function destroy(){
        //
    }
    public function delete(){
        return "This is the index of supllier";
    }
}
