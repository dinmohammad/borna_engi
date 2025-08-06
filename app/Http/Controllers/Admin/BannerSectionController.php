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
        // if (session()->has('success')) {
        //     toast(Session('success'), 'success');
        // }

        // if (session()->has('error')) {
        //     toast(Session('error'), 'error');
        // }
        $sliders = BannerSlider::latest()->get();
        return view('admin.website_management.banner_slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.website_management.banner_slider.create');
    }

    public function store(Request $request)
    {
        // Step 1: Validate the input
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ], [
            'image.mimes' => 'Only jpeg, png, jpg, and webp images are allowed.',
            'status.required' => 'Please select a status.',
        ]);

        $imagePath = null;

        // Step 2: If image is uploaded, store it
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Create unique filename
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Move image to public/uploads/banner_sliders
            $image->move(public_path('uploads/banner_sliders'), $filename);

            // Set image path to save in DB
            $imagePath = 'uploads/banner_sliders/' . $filename;
        }

        // Step 3: Save to database
        $banner_slider = new BannerSlider();
        $banner_slider->title = $request->input('title');
        $banner_slider->description = $request->input('description');
        $banner_slider->status = $request->input('status');
        if ($imagePath) {
            $banner_slider->image = $imagePath;
        }

        if ($banner_slider->save()) {
            return redirect()->route('admin.banner-slider.index')
                ->with('success', 'Banner slider created successfully!');
        } else {
            return redirect()->back()
                ->with('error', 'Banner slider creation failed!')
                ->withInput();
        }
    }



    public function edit(Request $request, $id)
    {

        $sliders = BannerSlider::findOrFail($id);

        return view('admin.website_management.banner_slider.edit', compact('sliders'));
    }


    public function update(Request $request, $id)
    {
        // Step 1: Validate the input
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ], [
            'image.mimes' => 'Only jpeg, png, jpg, and webp images are allowed.',
            'status.required' => 'Please select a status.',
        ]);

        // Step 2: Find the banner
        $banner_slider = BannerSlider::findOrFail($id);

        // Step 3: If image is uploaded, store it and delete the old one
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Create unique filename
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Move new image to public/uploads/banner_sliders
            $image->move(public_path('uploads/banner_sliders'), $filename);

            // Delete old image if exists
            if ($banner_slider->image && file_exists(public_path($banner_slider->image))) {
                unlink(public_path($banner_slider->image));
            }

            // Set new image path
            $banner_slider->image = 'uploads/banner_sliders/' . $filename;
        }

        // Step 4: Update other fields
        $banner_slider->title = $request->input('title');
        $banner_slider->description = $request->input('description');
        $banner_slider->status = $request->input('status');

        // Step 5: Save
        if ($banner_slider->save()) {
            return redirect()->route('admin.banner-slider.index')
                ->with('success', 'Banner slider updated successfully!');
        } else {
            return redirect()->back()
                ->with('error', 'Banner slider update failed!')
                ->withInput();
        }
    }


    public function inActive(Request $request, $id)
    {
        $bannerSlider = BannerSlider::findOrFail($id);
        $bannerSlider->update(['status' => 0]);
    
        return redirect()->route('admin.banner-slider.index')->with('success', 'Banner slider has been deactivated!');
    }
    
    public function active(Request $request, $id)
    {
        $bannerSlider = BannerSlider::findOrFail($id);
        $bannerSlider->update(['status' => 1]);
    
        return redirect()->route('admin.banner-slider.index')->with('success', 'Banner slider has been activated!');
    }

    
    
}
