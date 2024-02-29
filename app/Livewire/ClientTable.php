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
        $clients= Client::query();
        $clients = $clients->where(function($query){
            $query->where('clients.id','like','%'.$this->search.'%')
            ->orwhere('clients.name','like','%'.$this->search.'%')
            ->orwhere('clients.email','like','%'.$this->search.'%')
            ->orwhere('clients.address','like','%'.$this->search.'%');
        });

        $clients = $clients->orderBy('id','desc')->paginate(5);


        return view('livewire.client-table',compact('clients'));
    }

    public function mount($titulo = null){
        $this->titulo = $titulo;
    }

}
