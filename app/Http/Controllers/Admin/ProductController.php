<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Models\BannerSlider;
use App\Models\Division;
use App\Models\Districts;
use App\Models\Products;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
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
        $products = Products::latest()->get();
        return view('admin.website_management.product.index', compact('products'));
    }

    public function create()
    {
        $divisions = Division::latest()->get();
        
        return view('admin.website_management.product.create', compact('divisions'));
    }

    public function getDistrictsByDivision($id)
    {
        $districts = Districts::where('division_id', $id)->get(['id', 'name']);
        return response()->json($districts);
    }


    public function store(Request $request)
    {
        // dd($request->all());
        // Step 1: Validate the input
        $validatedData = $request->validate([
            'division'      => 'required|string|max:255',
            'districts'     => 'required|string|max:255',
            'type'          => 'required|string|max:255',
            'land_Area'     => 'required|string|max:255',
            'aprt_size'     => 'nullable|numeric',
            'units_num'     => 'nullable|string|max:255',
            'parking'       => 'nullable|numeric',
            'title'         => 'required|string|max:255',
            'description'   => 'required|string',
            'location'      => 'required|string|max:255',
            'image'         => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'status'        => 'nullable|boolean',
        ], [
            'division.required'     => 'Please select a division.',
            'districts.required'    => 'Please select a district.',
            'type.required'         => 'Please select a property type.',
            'land_Area.required'    => 'Land area is required.',
            'aprt_size.numeric'     => 'Apartment size must be a number.',
            'units_num.string'      => 'Units must be text.',
            'parking.numeric'       => 'Parking value must be a number.',
            'title.required'        => 'The title field is required.',
            'description.required'  => 'Please enter a description.',
            'location.required'     => 'Please enter a location.',
            'image.required'        => 'Please upload an image.',
            'image.image'           => 'The uploaded file must be an image.',
            'image.mimes'           => 'Image must be a JPEG, PNG, JPG, or WEBP file.',
            'image.max'             => 'Image size should not exceed 2MB.',
        ]);        

        $imagePath = null;
        // Step 2: If image is uploaded, store it
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $filename);
            $imagePath = 'uploads/products/' . $filename;
        }

        // Step 3: Save to database
        $product = new Products();
        $product->division = $request->division;
        $product->district = $request->districts;
        $product->type = $request->type;
        $product->land_area = $request->land_Area;
        $product->apartment_size = $request->aprt_size;
        $product->untis = $request->units_num;
        $product->parking_size = $request->parking;
        $product->title = $request->title;
        $product->descripiton = $request->description;
        $product->address = $request->location;
        $product->status = $request->status;
        $product->updated_by_id = $this->user->id;
        $product->updated_by_name = $this->user->name;
        if ($imagePath) {
            $product->image = $imagePath;
        }

        if ($product->save()) {
            return redirect()->route('admin.product.index')->with('success', 'product created successfully!');
        } else {
            return redirect()->back()->with('error', 'product creation failed!')->withInput();
        }
    }



    public function edit(Request $request, $id)
    {

        $product = Products::findOrFail($id);
        $divisions = Division::latest()->get();
        return view('admin.website_management.product.edit', compact('product', 'divisions'));
    }


    public function update(Request $request, $id)
    {
        // Find existing product or fail
        $product = Products::findOrFail($id);

        // Validate the input
        $validatedData = $request->validate([
            'division'      => 'required|string|max:255',
            'districts'     => 'required|string|max:255',
            'type'          => 'required|string|max:255',
            'land_Area'     => 'required|string|max:255',
            'aprt_size'     => 'nullable|numeric',
            'units_num'     => 'nullable|string|max:255',
            'parking'       => 'nullable|numeric',
            'title'         => 'required|string|max:255',
            'description'   => 'required|string',
            'location'      => 'required|string|max:255',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',  // nullable here
            'status'        => 'nullable|boolean',
        ], [
            'division.required'     => 'Please select a division.',
            'districts.required'    => 'Please select a district.',
            'type.required'         => 'Please select a property type.',
            'land_Area.required'    => 'Land area is required.',
            'aprt_size.numeric'     => 'Apartment size must be a number.',
            'units_num.string'      => 'Units must be text.',
            'parking.numeric'       => 'Parking value must be a number.',
            'title.required'        => 'The title field is required.',
            'description.required'  => 'Please enter a description.',
            'location.required'     => 'Please enter a location.',
            'image.image'           => 'The uploaded file must be an image.',
            'image.mimes'           => 'Image must be a JPEG, PNG, JPG, or WEBP file.',
            'image.max'             => 'Image size should not exceed 2MB.',
        ]);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $filename);
            $imagePath = 'uploads/products/' . $filename;

            // Optional: delete old image file if exists
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }

            $product->image = $imagePath;
        }

        // Update other fields
        $product->division = $request->division;
        $product->district = $request->districts;
        $product->type = $request->type;
        $product->land_area = $request->land_Area;
        $product->apartment_size = $request->aprt_size;
        $product->untis = $request->units_num;
        $product->parking_size = $request->parking;
        $product->title = $request->title;
        $product->descripiton = $request->description;
        $product->address = $request->location;
        $product->status = $request->status;
        $product->updated_by_id = $this->user->id;        // adjust as needed
        $product->updated_by_name = $this->user->name;    // adjust as needed

        if ($product->save()) {
            return redirect()->route('admin.product.index')->with('success', 'Product updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Product update failed!')->withInput();
        }
    }



    public function inActive(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $product->update(['status' => 0]);
    
        return redirect()->route('admin.product.index')->with('success', 'product has been deactivated!');
    }
    
    public function active(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $product->update(['status' => 1]);
    
        return redirect()->route('admin.product.index')->with('success', 'product has been activated!');
    }
}
