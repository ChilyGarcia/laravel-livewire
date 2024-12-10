<?php

namespace App\Livewire\Excel;

use App\Imports\ProvidersImport;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class ImportProviders extends Component
{
    use WithFileUploads;

    public $file;

    public function import()
    {
        $this->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        Excel::import(new ProvidersImport(), $this->file->getRealPath());

        session()->flash('message', 'Proveedores importados exitosamente.');
    }

    public function render()
    {
        return view('livewire.excel.import-providers');
    }
}
