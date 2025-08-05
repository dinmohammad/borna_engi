<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Models\BannerSlider;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BannerSectionController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('web')->user();
            return $next($request);
        });
    }


    public function index()
    {
        if (session()->has('success')) {
            toast(Session('success'), 'success');
        }

        if (session()->has('error')) {
            toast(Session('error'), 'error');
        }

        return view('admin.website_management.banner_slider.index');
    }

    public function create()
    {
        return view('admin.website_management.banner_slider.create');
    }

    public function store(Request $request)
    {
        // Step 1: Validate the file type and extension
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ], [
            'image.mimes' => 'Only jpeg, png, jpg, and webp images are allowed.',
        ]);

        // Step 2: If image is uploaded, check its dimensions
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Get image dimensions
            list($width, $height) = getimagesize($image);

            // Check if it matches 1920x1080
            if ($width !== 1920 || $height !== 1080) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['image' => 'Image must be exactly 1920x1080 pixels.']);
            }

            // Generate a unique name and move to folder
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/banner_sliders'), $filename);
        }

        // Create and save model
        $banner_slider = new BannerSlider();
        $banner_slider->title = $request->input('title');
        $banner_slider->description = $request->input('description');
        $banner_slider->status = $request->input('status', 0);
        if (isset($filename)) {
            $banner_slider->image = 'uploads/banner_sliders/' . $filename;
        }
        $banner_slider->save();

        return redirect()->route('admin.banner-slider.create')->with('success', 'Banner slider created successfully!');
    }
    
    
}
