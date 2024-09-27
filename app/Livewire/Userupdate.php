<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Userupdate extends Component
{
    public $s_id;
    public $name;
    public $email;

    public function render()
    {
        return view('livewire.userupdate');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required | min:4 | max:20',
            'email' => 'required | email'
        ]);
    }

    public function updateuser()
    {
        $this->validate([
            'name' => 'required | min:4 | max:20',
            'email' => 'required | email'
        ]);
        
        $userdata = User::find($this->s_id);
        $userdata->id = $this->s_id;
        $userdata->name = $this->name;
        $userdata->email = $this->email;
        $userdata->save();
       // return $this->redirectRoute('dashboard', navigate: true);
    }
    
}
