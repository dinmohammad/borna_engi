<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ContactMassage;

class ContactMassageController extends Controller
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
        $data = ContactMassage::latest()->get();
        return view('admin.website_management.contact-us.index', compact('data'));
    }

    public function reviewed(Request $request, $id)
    {
        $data = ContactMassage::findOrFail($id);
        $data->update(['status' => 0]);
    
        return redirect()->route('admin.contact-message.index')->with('success', 'Youtube Video has been deactivated!');
    }
}
