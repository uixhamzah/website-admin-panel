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

    public function mount()
    {
        $this->provinsi = Provinsi::all();
        $this->kabupaten = collect();
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
