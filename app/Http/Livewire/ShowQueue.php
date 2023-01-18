<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowQueue extends Component
{
    public $clubs = [];
    public function render()
    {
        $this->clubs = User::query()->where('rank', '!=', 0)->orderBy('rank')->get();
        return view('livewire.show-queue');
    }
}
