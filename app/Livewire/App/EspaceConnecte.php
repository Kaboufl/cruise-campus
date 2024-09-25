<?php

namespace App\Livewire\App;

use App\Models\Annonce;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class EspaceConnecte extends Component
{
    public $selectedScreen;

    public $annonces = [];

    public function mount() {
        $this->fetchAnnonces();
    }

    public function fetchAnnonces()
    {
        $this->annonces = Annonce::whereNot('user_id', Auth::id())->where('complet', false)->where('publie', true)->get();
    }

    #[On('changePanel')]
    public function switchScreen($panel)
    {
        $this->selectedScreen = $panel;
    }

    public function render()
    {
        return view('livewire.app.espace-connecte');
    }
}
