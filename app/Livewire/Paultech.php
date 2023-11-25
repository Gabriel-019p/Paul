<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;



class Paultech extends Component
{
    
    public $name;
    public $email;
    public $message;
    public $success;
    protected $rules =[
        'name' => 'required|min:5',
        'email' => 'required|email|max:100',
        'message' => 'required|max:500',
    ];
    

    public function create()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' =>$this->message,
        ]);

        $this->reset(['name','email','message']);
        $this->success = 'Sucess! Message submitted successfully';
        session()->flash('success','Message sent successfully');
    }
   
    public function render()
    {
        return view('livewire.paultech', [
        'users'=>User::latest()->paginate(10)
        ]);
    }
}
