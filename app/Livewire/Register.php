<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

#[Title('Register')] 
class Register extends Component
{
    public $countrylist = ['America', 'Australia', 'China', 'India', 'UAE'];
    public $us_states = ['Albama', 'Alaska', 'California', 'Delaware', 'Florida'];
    public $au_states = ['New South Wales', 'Victoria', 'Queensland', 'Western Australia', 'South Australia'];
    public $ch_states = ['Hebei', 'Hunan', 'Liaoning', 'Sichuan', 'Shanxi'];
    public $in_states = ['Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh'];
    public $uae_states = ['Abu Dhabi', 'Dubai', 'Fujairah', 'Sharjah', 'Ras Al Khaimah'];
    public $states = null;
    public $selectedCountry;
    public $selectedState;

    #[Validate('required|string|min:3|max:250')]
    public $name;

    #[Validate('required|email|max:250|unique:users,email')]
    public $email;

    #[Validate('required|string|min:8|confirmed')]
    public $password;

    public $password_confirmation;

    #[Validate('required')]
    public $gender = 'Male';

    #[Validate('required')]
    public $resident = ['Indian'];

    public $description;

    public function register()
    {
        $this->validate();
       
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'gender' => $this->gender,
            'resident' => $this->resident[0],
            'country' => $this->selectedCountry,
            'state' => $this->selectedState,
            'description' => $this->description
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        Auth::attempt($credentials);

        session()->flash('message', 'You have successfully registered & logged in!');
 
        return $this->redirectRoute('dashboard', navigate: true);
    }

    public function updateStates()
    {
        $this->states = null;

        switch ($this->selectedCountry){
            case 'America':
                $this->states = $this->us_states;
                break;
            case 'Australia':
                $this->states = $this->au_states;
                break;
            case 'China':
                $this->states = $this->ch_states;
                break;
            case 'India':
                $this->states = $this->in_states;
                break;
            case 'UAE':
                $this->states = $this->uae_states;
                break;
            default:
                $this->states = null;
        }
    }

    public function render()
    {
        return view('livewire.register');
    }
}