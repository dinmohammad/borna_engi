<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Models\BannerSlider;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

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
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ], [
            'image.mimes' => 'Only jpeg, png, jpg, and webp images are allowed.',
        ]);

        $banner_slider = new BannerSlider();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $directory = 'assets/images/banner/';

            // Ensure directory exists
            $destinationPath = public_path($directory);
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0777, true);
            }

            $extension = $image->getClientOriginalExtension();

            // Compress and save image
            $compressedImage = Image::make($image)->encode($extension, 75);

            // Generate unique filename
            $imageName = now()->format('ymdHis') . '_' . Str::random(10) . '.' . $extension;

            // Save compressed image
            $compressedImage->save($destinationPath . $imageName);

            // Save relative path
            $banner_slider->image = $directory . $imageName;
        }

        dd($banner_slider);

        return view('admin.website_management.banner_slider.create');
    }
    
}
