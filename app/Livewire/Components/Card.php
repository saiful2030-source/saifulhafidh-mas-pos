<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Card extends Component
{
    public $title;
    public $content;
    public $imageUrl;

    public function mount($title, $content, $imageUrl = null)
    {
        $this->title = $title;
        $this->content = $content;
        $this->imageUrl = $imageUrl;
    }
    public function render()
    {
        return view('livewire.components.card');
    }
}
