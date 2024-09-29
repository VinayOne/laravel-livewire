<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Dashboard - Laravel and Livewire Learning')] 
class Dashboard extends Component
{
    public $userlist;
    public $s_id;
    public $name;
    public $email;
    public $gender;
    public $resident;
    public $country;
    public $state;
    public $description;
    public $check = true;

    public function render()
    {
        $this->userlist=User::all();
        return view('livewire.dashboard');
    }

    public function updateUser($id)
    {
        $this->s_id = $id;
        $userData = User::find($id);
        $this->name = $userData->name;
        $this->email = $userData->email;
        $this->gender = $userData->gender;
        $this->resident = $userData->resident;
        $this->country = $userData->country;
        $this->state = $userData->state;
        $this->description = $userData->description;
        $this->check = false;
    }

    public function deleteUser($id)
    {
        User::find($id)->delete();
        $this->userlist=User::all();
    }
}