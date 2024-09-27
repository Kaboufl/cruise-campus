<?php

namespace App\Livewire\App;

use Livewire\Component;

class Menu extends Component
{
    public $panel = 'discover';

    public function mount() {
        $this->dispatch('changePanel', $this->panel);
    }

    public function changePane($panel) {
        $this->panel = $panel;
        $this->dispatch('changePanel', $panel);
    }

    public function render()
    {
        return view('livewire.app.menu');
    }
}
