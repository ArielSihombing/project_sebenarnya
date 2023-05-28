<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        // mengambil data dari tabel contacts
        $contacts = DB::table('contacts')->get();

        // mengirim data mahasiswa ke view contact
        return view('about', ['contacts' => $contacts]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('contact');
    }

    public function store(Request $request)
    {
        // insert data ke table mahasiswa
        DB::table('contacts')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/contact');
    }

}
