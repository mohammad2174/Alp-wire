<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class FitnessPage extends Component
{
    public $name;
    public $email;
    public $phone;

    protected $rules = [
        "name" => "required|min:6",
        "email" => "required|email|unique:users",
        "phone" => "required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9",
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $data = $this->validate();
        User::create([
            'name' => $data,
            'email' => $data,
            'phone' => $data
        ]);
    }

    public function render()
    {
        return view('livewire.fitness-page');
    }
}
