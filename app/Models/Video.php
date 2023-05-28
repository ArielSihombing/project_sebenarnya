<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function showVideo($videoMusic)
    {
        $video = Video::where('video_music', $videoMusic)->first();

        return view('video.show', compact('video'));
    }
}
