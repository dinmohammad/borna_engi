<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerSlider;
use App\Models\Products;
use App\Models\Testimonials;

class WebsiteController extends Controller
{
    public function BannerSliderGet()
    {
        $sliders  = BannerSlider::where('status', 1)->latest()->get();
        $products = Products::where('status', 1)->latest()->get();
        $testimonials = Testimonials::where('status', 1)->latest()->get();

        return view('frontend.pages.landing.index', compact('sliders', 'products','testimonials'));
    }
}
