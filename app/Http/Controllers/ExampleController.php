<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index(){
        return view('home.home');
    }
    public function fullName(){
        return view('fullName.fullName');
    }
    public function count(){
        return view('count.count');
    }
    public function oddEvent(){
        return view('oddEvent.oddEvent');
    }
    public function manageProduct(){
        return view('manageProduct.manageProduct');
    }

}
