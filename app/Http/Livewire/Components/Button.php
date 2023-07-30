<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Button extends Component
{
    public $text;
    public $icon;
    public $direction;

    public function mount($text, $icon = "", $direction = ""){
        $this -> text = $text;
        $this -> icon = $icon;
        $this -> direction = $direction;
    }

    public function render()
    {
        return view('livewire.components.button');
    }
}
