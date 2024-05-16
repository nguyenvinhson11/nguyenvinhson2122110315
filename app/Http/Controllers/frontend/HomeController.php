<?php

namespace app\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function product_detail($slug){
        return view('frontend.product_detail');
    }
}
