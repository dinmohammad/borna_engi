<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerSlider;

class WebsiteController extends Controller
{
    public function BannerSliderGet()
    {

        $sliders = BannerSlider::where('status', 1)->latest()->get();
        return view('frontend.pages.landing.index', compact('sliders'));
    }
}
