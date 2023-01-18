<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class HandleClub extends Component
{

    public $club;

    public function mount(User $club){
        if(!$club->rank){
            return redirect(route('queue'));
        }
        $this->club = $club;
    }
    public function render()
    {
        return view('livewire.handle-club');
    }
    public function accept($points){
        if($this->club->rank) {
            $this->club->increment('points',$points);
            $this->club->update(['rank' => 0]);
        }
        return redirect(route('queue'));
    }
    public function reject($points){
        if($this->club->rank) {
            $this->club->decrement('points',$points);
            $this->club->update(['rank' => 0]);
        }
        return redirect(route('queue'));
    }
    public function forgive(){
        if($this->club->rank) {
            $this->club->update(['rank' => 0]);
        }
        return redirect(route('queue'));
    }
}
