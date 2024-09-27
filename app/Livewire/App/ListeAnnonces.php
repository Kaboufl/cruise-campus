<?php

namespace App\Livewire\App;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class ListeAnnonces extends Component
{
    #[Reactive]
    public $annonces;
    public $searchFilter;

    public function filter() {
        $this->dispatch('searchFilter', $this->searchFilter);
    }

    public function render()
    {
        return view('livewire.app.liste-annonces');
    }
}
