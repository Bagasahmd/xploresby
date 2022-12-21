<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Wisata;
>>>>>>> 3caeca8 (add some features)
use Illuminate\Http\Request;

class WisataController extends Controller
{
<<<<<<< HEAD
    public function index(){
        return 'sukses';
=======

    public function index()
    {
        $wisatas = \App\Models\Wisata::all();
        return view ('wisatas.index', compact('wisatas'));
>>>>>>> 3caeca8 (add some features)
    }
}
