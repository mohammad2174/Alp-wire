<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class BodyTable extends Component
{
    public $users;

    public function mount(User $users)
    {
        $this->users = $users;
    }

    public function render()
    {
        return view('livewire.body-table');
    }
}
