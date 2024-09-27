<?php

namespace App\Livewire\App;

use App\Models\Annonce;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class NewAnnonce extends Component
{
    #[Validate('required|string|min:3')]
    public $titre;
    #[Validate('nullable|string')]
    public $description;
    #[Validate('boolean')]
    public $publier;

    public $published = false;

    public function store()
    {
        $this->validate();

        $user = Auth::user();

        $annonce = $user->annonces()->create([
            'titre' => $this->titre,
            'description' => $this->description,
            'publie' => $this->publier,
        ]);

        $this->titre = null;
        $this->description = null;
        $this->publier = null;

        $this->published = true;
        $this->dispatch('annoncePostee');
    }

    public function render()
    {
        return view('livewire.app.new-annonce');
    }
}
