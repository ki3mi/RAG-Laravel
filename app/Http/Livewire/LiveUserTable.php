<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class LiveUserTable extends Component
{
    use WithPagination;

    // Variables
    public $buscar = "";
    public $perPage = 5;
    
    // Función para mostrar los resultados
    public function render()
    {
        return view('livewire.live-user-table', [
            'users' => User::where('name','like', "%{$this->buscar}%")
                ->orWhere('email', 'like', "%{$this->buscar}%")
                ->orwhere('id', 'like', "%{$this->buscar}%")
                ->paginate($this->perPage),
        ]);
    }

    // Funcion que reinicia las páginas "updating" es la palabra reservada y "Buscar" es nuestra variable
    public function updatingBuscar(){
        $this->resetPage();
    }
}
