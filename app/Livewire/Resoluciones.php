<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Resolucion;
use Illuminate\Support\Facades\Storage;

class Resoluciones extends Component
{
    use WithFileUploads;

    public $numero_exp, $numero_resolucion, $fecha, $barrio, $casa, $pdf;
    public $showModal = false;

    protected $rules = [
        'numero_exp' => 'required|string',
        'numero_resolucion' => 'required|string',
        'fecha' => 'required|date',
        'barrio' => 'required|string',
        'casa' => 'required|string',
        'pdf' => 'required|file|mimes:pdf|max:2048', // Máx 2MB
    ];

    public function abrirModal()
    {
        $this->reset(); // Resetea los campos al abrir el modal
        $this->showModal = true;
    }

    public function guardar()
    {
        $this->validate();

        $pdfPath = $this->pdf->store('resoluciones', 'public'); // Guarda en storage/app/public/resoluciones

        Resolucion::create([
            'numero_exp' => $this->numero_exp,
            'numero_resolucion' => $this->numero_resolucion,
            'fecha' => $this->fecha,
            'barrio' => $this->barrio,
            'casa' => $this->casa,
            'pdf' => $pdfPath, // Guarda la ruta en la BD
        ]);

        $this->reset(); // Limpia los campos
        $this->showModal = false; // Cierra el modal
        session()->flash('message', 'Resolución subida con éxito');
    }

    public function render()
    {
        return view('livewire.resoluciones');
    }
}
