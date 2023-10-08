<?php

namespace App\Livewire;

use Livewire\Component;

class ExtendedCard extends Component
{
    public $title;
    public $slug;
    public $platforms = [];
    public $tags = [];
    public function render()
    {
        return view('livewire.extended-card');
    }
}
