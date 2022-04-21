<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WelcomePage extends Component
{
    public function render()
    {
        return view('livewire.welcome-page');
    }

    public function fitness()
    {
        return redirect()->to('/fitness');
    }

    public function bodybuilding()
    {
        return redirect()->to('/bodybuilding');
    }

    public function crossfit()
    {
        return redirect()->to('/crossfit');
    }
}
