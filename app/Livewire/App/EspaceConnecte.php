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

    #[On('searchFilter')]
    public function fetchAnnonces($city = null)
    {
        if (!$city) {
            $this->annonces = Annonce::with('user')
                ->whereNot('user_id', Auth::id())
                ->where('complet', false)
                ->where('publie', true)
                ->get();
        } else {
            $this->annonces = Annonce::with('user')
            ->whereNot('user_id', Auth::id())
            ->where('complet', false)
            ->where('publie', true)
            ->whereHas('user', function($query) use ($city) {
                $query->where('ville', $city);
            })->get();
        }
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
