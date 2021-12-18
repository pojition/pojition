<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sample extends Component
{

    public $count = 10;
    public function render()
    {
        return view('livewire.sample');
    }

    public function inc()
    {
        $this->count++;
    }
    public function dec()
    {
        $this->count = $this->count - 1;
    }
}
