<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class QueueHandler extends Component
{

    protected $listeners = ['pushToQueue'];

    public function render()
    {
        return view('livewire.queue-handler');
    }

    public function pushToQueue(){
        if(!auth()->user()->rank){
            $lastRank = User::select('rank')->orderByDesc('rank')->first()['rank'];
            ++$lastRank;
            auth()->user()->update(['rank' => $lastRank]);
        }
    }
}
