<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Wisata;

class Home extends Component
{
    public $wisatas;
    
    public function render()
    {
        $this->wisatas = Wisata::all();
        return view('home')
        ->layout('layouts.main');
    }
}
