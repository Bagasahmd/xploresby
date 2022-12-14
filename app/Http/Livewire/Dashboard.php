<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Wisata;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;
    public $nama,
            $kategori,
            $deskripsi,
            $file_name;

    public function render()
    {
        $wisatas = Wisata::latest()->simplePaginate(10);
        return view('dashboard',[
            'wisatas'=>$wisatas
        ]);
    }
}
