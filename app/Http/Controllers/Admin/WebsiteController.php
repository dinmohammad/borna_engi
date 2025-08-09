<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerSlider;
use App\Models\Products;
use App\Models\Testimonials;
use App\Models\YoutubeVideos;

class WebsiteController extends Controller
{
    public function BannerSliderGet()
    {

        if (session()->has('success')) {
            toast(Session('success'), 'success');
        }

        if (session()->has('error')) {
            toast(Session('error'), 'error');
        }
        $sliders  = BannerSlider::where('status', 1)->latest()->get();
        $products = Products::where('status', 1)->latest()->get();
        $testimonials = Testimonials::where('status', 1)->latest()->get();
        $youtubeVideos = YoutubeVideos::where('status', 1)->latest()->get();

        return view('frontend.pages.landing.index', compact('sliders', 'products','testimonials', 'youtubeVideos'));
    }
}
