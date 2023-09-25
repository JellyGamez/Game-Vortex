<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $title = "";
    public $slug = "da";
    public $platforms = [];
    public function render()
    {
        return view('livewire.card');
    }
}
