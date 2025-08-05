<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YoutubeVideos extends Model
{
    protected $table = 'youtube_videos';
    protected $fillable = [
        'url',
        'video_positon',
        'status',
        'updated_by',
    ];
}
