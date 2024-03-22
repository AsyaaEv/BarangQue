<?php

namespace App\Livewire\Dashboard\Input\Barang;

use App\Models\Audit;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AddBarang extends Component
{
    public $jenis, $no, $nama, $foto, $validasiNo, $messageValidasi, $toggleValidasi=false;
    use WithFileUploads;
    public function render()
    {
        if($this->validasiNo){
            $data = Barang::where('no', $this->validasiNo)->get();
            if($data->isNotEmpty()){
                $this->messageValidasi = 'Data telah digunakan';
                $this->toggleValidasi = false;
            } else {
                $this->messageValidasi = '';
                $this->toggleValidasi = true;
            }
        } else {
            $this->messageValidasi = '';
        }
        
        return view('livewire.dashboard.input.barang.add-barang');
    }

    public function insert(){

        if($this->toggleValidasi == true){
            $post = new Barang;
            $post->jenis = $this->jenis;
            $upperNo = Str::upper($this->no);
            $post->no = $upperNo; 
            $post->nama = $this->nama; 
            $post->status = "0";
            
            $audit = new Audit;
            $audit->nama_admin = Auth::user()->name;
            $audit->no_barang = $this->no;
            $audit->keterangan = "Menambahkan";
    
            if($this->foto){
                $data = $this->foto->store('src/img/barang', 'public');
                $post->foto = $data;
            }
    
            try{
                $post->save();
                $audit->save();
                session()->flash('msg', __('Barang berhasil ditambahkan'));
                session()->flash('alert', 'success');
                return redirect('/dashboard/barang');
            } catch (\Throwable $th) {
    
            }
        } else {
            return;
        }
    }

    public function resetData(){
        $this->jenis = null;
        $this->no = null;
        $this->nama = null;
        $this->foto = null;
    }

}
