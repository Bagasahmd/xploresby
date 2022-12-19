<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Wisata;
use Livewire\WithPagination;
use Livewire\WithFileUploads;


class Dashboard extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $nama,
            $kategori,
            $deskripsi,
            $file_name,
            $modal = false,
            $wisata_id,
            $old_file_name,
            $deleteConfirmation = false,
            $deleteId,
            $search;

    public function render()
    {
        return view ('dashboard', [
            'wisatas'=>$this->search === null ?
                Wisata::latest()->simplePaginate(10) :
                Wisata::latest()->where('nama', 'like', '%'. $this->search . '%')->simplePaginate(10),
                
        ]);
    }

    public function openModal(){
        $this->modal = true;
    }

    public function closeModal(){
        $this->modal = false;
        $this->resetField();
    }

    public function resetField(){
        $this->nama = "";
        $this->kategori = "";
        $this->deskripsi = "";
        $this->file_name = null;
        $this->deleteId = null;
    }

    public function store(){
        $imageValidation = '';
        if($this->file_name != $this->old_file_name){
            $imageValidation = 'required|image|mimes:jpg,jpeg,png|max:1024';
        }

        $this->validate([
            'nama'=>'required',
            'deskripsi'=>'required',
            'kategori'=>'required',
            'file_name'=> $imageValidation
        ]);

        if($this->file_name != $this->old_file_name){
            $fileName = $this->file_name->store('wisata');
        }else{
            $fileName = $this->file_name;
        }

        $result = Wisata::updateOrCreate(['id' => $this->wisata_id],[
                'nama' => $this->nama,
                'deskripsi' => $this->deskripsi,
                'kategori' => $this->kategori,
                'file_name' => $fileName
            ]);
            if($result != "0"){
                session()->flash('message', 'Berhasil Mengupdate Data');
            }else{
                session()->flash('errMessage', 'Gagal Mengupdate Data');
            }
            $this->closeModal();
            $this->resetField();
    }

    public function edit($id){
        
        $wisata = Wisata::find($id);
        $this->nama = $wisata->nama;
        $this->deskripsi = $wisata->deskripsi;
        $this->kategori = $wisata->kategori;
        $this->file_name = $wisata->file_name;
        $this->old_file_name = $wisata->file_name;
        $this->wisata_id = $id;
        $this->openModal();
    }

    public function openDeleteModal($id){
        $this->deleteId = $id;
        $this->deleteConfirmation = true;
    }

    public function closeDeleteModal(){
        $this->deleteConfirmation = false;
        $this->resetField();
    }

    public function delete($id){
        $wisata = Wisata::find($id);
        $result = $wisata->delete();
        if($result != "0"){
            session()->flash('message', 'Berhasil Menghapus Data');
        }else{
            session()->flash('errMessage', 'Gagal Menghapus Data');
        }
        $this->closeDeleteModal();
    }

}
