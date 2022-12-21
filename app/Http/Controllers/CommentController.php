<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function index()
    {
        $comments = \App\Models\Comment::all();
        return view ('comments.index', compact('comments'));
    }
    public function create()
    {
        return view ('comments.create');
    }
    public function store(Request $request)
    {

        //create comment
        Comment::create([
            'nama'     => $request->nama,
            'pesan'    => $request->pesan
        ]);

        
    }
}
