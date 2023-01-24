<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Leaderboard extends Component
{
    public function render()
    {
        $ranks = User::query()->whereHas("roles", function($q) {
            $q->where("name", 'participant');
        })->orderByDesc('points')->orderByDesc('id')->get();
        return view('livewire.leaderboard', compact('ranks'));
    }
}
