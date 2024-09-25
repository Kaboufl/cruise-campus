<?php

namespace App\Livewire\App;

use Livewire\Component;

class ListeAnnonces extends Component
{
    public $annonces;

    public function render()
    {
        return view('livewire.app.liste-annonces');
    }
}
