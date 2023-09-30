<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function product()
    {
        return view('frontend.pages.product');
    }
    public function productdetail()
    {
        return view('frontend.pages.productdetail');
    }
    public function aboutus()
    {
        $abouts = About::where('status', '1')->first();
        return view('frontend.pages.aboutus', compact('abouts'));
    }
    public function shoppingcart()
    {
        return view('frontend.pages.shoppingcart');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
