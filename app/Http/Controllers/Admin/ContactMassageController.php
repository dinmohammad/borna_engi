<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ContactMassage;
use RealRashid\SweetAlert\Facades\Alert;

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
        if (session()->has('success')) {
            toast(Session('success'), 'success');
        }

        if (session()->has('error')) {
            toast(Session('error'), 'error');
        }
        $data = ContactMassage::latest()->get();
        return view('admin.website_management.contact-us.index', compact('data'));
    }

    public function reviewed(Request $request, $id)
    {
        $data = ContactMassage::findOrFail($id);
        $data->update(['status' => 0]);
    
        return redirect()->route('admin.contact-message.index')->with('success', 'Youtube Video has been deactivated!');
    }

    public function store(Request $request)
    {
        // ✅ Validation rules
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name'  => 'nullable|string',
            'email'      => 'required|email',
            'number'     => 'required|string',
            'message'    => 'required|string',
        ], [
            'first_name.required' => 'Please enter your first name.',
            'email.required'      => 'Please enter your email address.',
            'email.email'         => 'Please enter a valid email address.',
            'number.required'     => 'Please enter your phone number.',
            'message.required'    => 'Please enter your message.',
        ]);

        // dd($request->all());

        $contact = new ContactMassage();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->number = $request->number;
        $contact->message = $request->message;

        // ✅ Redirect back with success
        if($contact->save()){
            Alert::success('Success!', 'Your message has been sent successfully!');
            return back()->with('success', 'Your message has been sent successfully!');
        }else{
            return redirect()->route('landing-page.get')->with('success', 'Message submited successfully!');
        }
    }
}
