<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;
use Livewire\WithPagination;

class ClientTable extends Component
{
    use WithPagination;
    public $search = '';
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $clients= Client::orderBy('id','desc')->paginate(5);
        return view('livewire.client-table',compact('clients'));
    }

    public function mount($titulo = null){
        $this->titulo = $titulo;
    }

}
