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
    public $user_role = "";
    
    // Función para mostrar los resultados
    
    public function render()
    {
        $users = User::termino($this->buscar)
            ->role($this->user_role);

        return view('livewire.live-user-table', [
            'users' => $users
                ->paginate($this->perPage),
        ]);
    }

    // Funcion que reinicia las páginas "updating" es la palabra reservada y "Buscar" es nuestra variable
    public function updatingBuscar(){
        $this->resetPage();
    }
}
