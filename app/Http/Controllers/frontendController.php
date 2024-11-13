<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;


class frontendController extends Controller
{
public function index(){
    return view('frontend.page.showProduct');
}
public function login(){
    return view('frontend.page.login');
}


}
