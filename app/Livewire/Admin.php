<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;


class Admin extends Component
{

   use WithPagination; 

   public $perPage = 5;

   public function render()
    {
        return view('livewire.admin',  [
        'users' => User::paginate($this->perPage), 
    ]);

    }
}
