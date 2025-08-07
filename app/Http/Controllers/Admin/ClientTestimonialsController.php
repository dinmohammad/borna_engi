<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Models\Testimonials;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ClientTestimonialsController extends Controller
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
        $sliders = Testimonials::latest()->get();
        return view('admin.website_management.testimonials.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.website_management.testimonials.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Step 1: Validate the input
        $request->validate([
            'client_quote'   => 'required|string|max:255',
            'client_name'    => 'required|string|max:100',
            'client_position'=> 'required|string|max:100',
            'status'         => 'required|in:0,1',
            'image'          => 'required|image|mimes:jpeg,png,jpg,webp,svg|max:2048|dimensions:width=314,height=330',
        ], [
            'client_quote.required'    => 'Client quote is required.',
            'client_name.required'     => 'Client name is required.',
            'client_position.required' => 'Client position is required.',
            'status.required'          => 'Status is required.',
            'status.in'                => 'Status must be either 0 (inactive) or 1 (active).',
            'image.required'           => 'Image is required.',
            'image.image'              => 'The uploaded file must be an image.',
            'image.mimes'              => 'The image must be in jpeg, png, jpg, webp, or svg format.',
            'image.max'                => 'The image size must not exceed 2MB.',
            'image.dimensions'         => 'Image must be exactly 314*330 pixels.',
        ]);

        // Step 2: If image is uploaded, store it
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/testimonials'), $filename);
            $imagePath = 'uploads/testimonials/' . $filename;
        }

        // Step 3: Save to database
        $testimonials = new Testimonials();
        $testimonials->quote = $request->client_quote;
        $testimonials->client_name = $request->client_name;
        $testimonials->client_position = $request->client_position;
        $testimonials->status = $request->status;
        $testimonials->updated_by_id = $this->user->id;        // adjust as needed
        $testimonials->updated_by_name = $this->user->name;
        if ($imagePath) {
            $testimonials->image = $imagePath;
        }

        if ($testimonials->save()) {
            return redirect()->route('admin.testimonials.index')->with('success', 'Testimonials created successfully!');
        } else {
            return redirect()->back()->with('error', 'Testimonials creation failed!')->withInput();
        }
    }



    public function edit(Request $request, $id)
    {

        $testimonial = Testimonials::findOrFail($id);

        return view('admin.website_management.testimonials.edit', compact('testimonial'));
    }


    public function update(Request $request, $id)
    {
        // Step 1: Validate the input
        $request->validate([
            'client_quote'    => 'required|string|max:255',
            'client_name'     => 'required|string|max:100',
            'client_position' => 'required|string|max:100',
            'status'          => 'required|in:0,1',
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048|dimensions:width=314,height=330',
        ], [
            'client_quote.required'     => 'Client quote is required.',
            'client_name.required'      => 'Client name is required.',
            'client_position.required'  => 'Client position is required.',
            'status.required'           => 'Status is required.',
            'status.in'                 => 'Status must be either 0 (inactive) or 1 (active).',
            'image.image'               => 'The uploaded file must be an image.',
            'image.mimes'               => 'The image must be in jpeg, png, jpg, webp, or svg format.',
            'image.max'                 => 'The image size must not exceed 2MB.',
            'image.dimensions'          => 'Image must be exactly 314×330 pixels.',
        ]);
    
        // Step 2: Find the testimonial
        $testimonial = Testimonials::findOrFail($id);
    
        // Step 3: Update fields
        $testimonial->quote           = $request->client_quote;
        $testimonial->client_name     = $request->client_name;
        $testimonial->client_position = $request->client_position;
        $testimonial->status          = $request->status;
        $testimonial->updated_by_id   = auth()->id(); // or $this->user->id if using in controller
        $testimonial->updated_by_name = auth()->user()->name;
    
        // Step 4: Handle image if uploaded
        if ($request->hasFile('image')) {
            // Optionally delete old image (optional step)
            if ($testimonial->image && file_exists(public_path($testimonial->image))) {
                unlink(public_path($testimonial->image));
            }
    
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/testimonials'), $filename);
            $testimonial->image = 'uploads/testimonials/' . $filename;
        }
    
        // Step 5: Save and return
        if ($testimonial->save()) {
            return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Testimonial update failed!')->withInput();
        }
    }
    


    public function inActive(Request $request, $id)
    {
        $testimonial = Testimonials::findOrFail($id);
        $testimonial->update(['status' => 0]);
    
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonials has been deactivated!');
    }
    
    public function active(Request $request, $id)
    {
        $testimonial = Testimonials::findOrFail($id);
        $testimonial->update(['status' => 1]);
    
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonials has been activated!');
    }
}
