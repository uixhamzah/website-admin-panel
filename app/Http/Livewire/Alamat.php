<?php

namespace App\Http\Livewire;

use App\Models\Kabupaten;
use App\Models\Provinsi;
use Livewire\Component;

class Alamat extends Component
{
    public $provinsi;
    public $kabupaten;

    public $selectedProvinsi = "";
    public $kab;

    public function mount()
    {
        $this->provinsi = Provinsi::all();
        $this->kabupaten = collect();
        if ($this->kab) {
            $this->selectedProvinsi = $this->kab->province_id;
            $this->updatedSelectedProvinsi();
        }
    }

    public function render()
    {
        return view('livewire.alamat');
    }

    public function updatedSelectedProvinsi()
    {
        $this->kabupaten = Kabupaten::where('province_id', $this->selectedProvinsi)->get();
    }
}
