<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('kontak-kami');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'nama' => $request->nama,
            'hp' => $request->hp,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ];

        Mail::to('bagas.20016@mhs.unesa.ac.id')->send(new ContactMail($details));
        return back()->with('message_sent', 'Pesan Kamu Sudah Terkirim');
    }
}
