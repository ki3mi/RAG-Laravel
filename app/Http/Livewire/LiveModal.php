<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiveModal extends Component
{
    public $showModal = "hidden";

    protected $listeners = [
        'showModal' => 'sacarModal'
    ];

    public function render()
    {
        return view('livewire.live-modal');
    }

    // mostrar la modal
    public function sacarModal($user)
    {
        $this->showModal = "";
    }
    // ocultar la modal
    public  function cerrarModal()
    {
        $this->showModal = "hidden";
    }
}
