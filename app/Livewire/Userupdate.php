<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Userupdate extends Component
{
    public $s_id;
    public $name;
    public $email;
    public $gender;
    public $resident;
    public $country;
    public $state;
    public $description;

    public function render()
    {
        return view('livewire.userupdate');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required | min:4 | max:20',
            'email' => 'required | email',
            'gender' => 'required',
            'resident' => 'required',
            'country' => 'required',
            'state' => 'required',
            'description' => 'required'
        ]);
    }

    public function updateuser()
    {
        $this->validate([
            'name' => 'required | min:4 | max:20',
            'email' => 'required | email',
            'gender' => 'required',
            'resident' => 'required',
            'country' => 'required',
            'state' => 'required',
            'description' => 'required'
        ]);
        
        $userdata = User::find($this->s_id);
        $userdata->update([
            'name'=>$this->name,
            'email'=>$this->email,
            'gender'=>$this->gender,
            'resident'=>$this->resident,
            'country'=>$this->country,
            'state'=>$this->state,
            'description'=>$this->description
        ]);

       return $this->redirectRoute('dashboard', navigate: true);
    }
    
}
