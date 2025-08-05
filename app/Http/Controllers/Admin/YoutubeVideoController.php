<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\YoutubeVideos;
use Illuminate\Support\Facades\Validator;


class YoutubeVideoController extends Controller
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
        $videos = YoutubeVideos::latest()->get();
        return view('admin.website_management.youtube_videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.website_management.youtube_videos.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Step 1: Validate the file type and extension
        $request->validate([
            'youtube_url' => 'required|string',
        ], [
            'youtube_url.required' => 'The YouTube URL is required.',
            'youtube_url.string' => 'The YouTube URL must be a valid string.',
        ]);

        // Create and save model
        $videoURL = new YoutubeVideos();
        $videoURL->url = $request->youtube_url;
        $videoURL->status = $request->status;
        

        if($videoURL->save()){
            return redirect()->route('admin.youtube-video.index')->with('success', 'Banner slider created successfully!');
        }else{
            return redirect()->back()->with('error', 'Youtube video create failed!');
        }

    }

    public function edit(Request $request, $id)
    {

        $youtubeVideo = YoutubeVideos::findOrFail($id);

        return view('admin.website_management.youtube_videos.edit', compact('youtubeVideo'));
    }


    public function update(Request $request, $id)
    {
        // Step 1: Validate the input
        $request->validate([
            'youtube_url' => 'required|string',
        ], [
            'youtube_url.required' => 'The YouTube URL is required.',
            'youtube_url.string' => 'The YouTube URL must be a valid string.',
        ]);

        // Step 2: Find the existing video
        $videoURL = YoutubeVideos::findOrFail($id);

        // Step 3: Update fields
        $videoURL->url = $request->youtube_url;
        $videoURL->status = $request->status;

        // Step 4: Save and redirect
        if ($videoURL->save()) {
            return redirect()->route('admin.youtube-video.index')->with('success', 'YouTube video updated successfully!');
        } else {
            return redirect()->back()->with('error', 'YouTube video update failed!');
        }
    }


    public function inActive(Request $request, $id)
    {
        $youtubeVideo = YoutubeVideos::findOrFail($id);
        $youtubeVideo->update(['status' => 0]);
    
        return redirect()->route('admin.youtube-video.index')->with('success', 'Youtube Video has been deactivated!');
    }
    
    public function active(Request $request, $id)
    {
        $youtubeVideo = YoutubeVideos::findOrFail($id);
        $youtubeVideo->update(['status' => 1]);
    
        return redirect()->route('admin.youtube-video.index')->with('success', 'Youtube Video has been activated!');
    }
}
