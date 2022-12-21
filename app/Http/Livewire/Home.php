<?php

namespace App\Http\Livewire;

<<<<<<< HEAD
=======
use App\Models\Comment;
>>>>>>> 3caeca8 (add some features)
use Livewire\Component;
use App\Models\Wisata;

class Home extends Component
{
<<<<<<< HEAD
    public $wisatas;
    
    public function render()
    {
        $this->wisatas = Wisata::all();
        return view('home')
        ->layout('layouts.main');
=======
    public $comments;
    public $wisatas;
    public $home;

    public function render()
    {
        $this->comments = Comment::all();
        $this->wisatas  = Wisata::all();
        return view('home')->layout('layouts.main');
>>>>>>> 3caeca8 (add some features)
    }
}
