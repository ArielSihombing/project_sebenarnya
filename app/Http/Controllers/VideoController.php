<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Contact;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        // mengambil data dari tabel contacts
        $videos = DB::table('videos')->get();

        // mengirim data mahasiswa ke view contact
        return view('index', ['videos' => $videos]);
    }
    public function indexx()
    {
        // mengambil data dari tabel contacts
        $videos = DB::table('videos')->get();

        // mengirim data mahasiswa ke view contact
        return view('admin', ['videos' => $videos]);
    }


   

    public function tambah()
    {
        // memanggil view tambah
        return view('index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'video_music' => 'required|mimetypes:video/mp4,video/avi,video/mpeg|max:20000'
        ]);
        $video = $request->file('video_music');
        $name_gen = hexdec(uniqid()) . '.' . $video->getClientOriginalExtension(); // Generate a unique filename

        // Move the uploaded video to a storage location
        $videoPath = public_path('upload/video/' . $name_gen);
        $video->move('upload/video/', $name_gen);

        $save_url = 'upload/video/' . $name_gen; // Save the URL or filepath for further use

        Video::insert([
            'title' => $request->title,
            'band' => $request->band,
            'artis' => $request->artis,
            'video_music' => $save_url,

        ]);
        return view('index',compact('video'));


    }


    public function showVideo()
    {
        $videos = Video::all();

        return view('video.index', compact('videos'));
    }
    public function saveToFolder()
    {
        $videos = Video::all();

        foreach ($videos as $video) {
            $videoPath = public_path($video->video_music);
            $videoPath = storage_path('app/public/' . $video->video_music);
            $storagePath = 'app/videos/' . basename($videoPath);

            // Membaca file video
            $videoData = Storage::get($videoPath);


            // Menyimpan file video ke folder
            Storage::put($storagePath, file_get_contents($videoPath));
        }

        return "Data video berhasil disimpan ke folder.";
    }
}
