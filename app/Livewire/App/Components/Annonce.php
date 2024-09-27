<?php

namespace App\Livewire\App\Components;

use Livewire\Component;

class Annonce extends Component
{
    public $annonce;

    public $pseudo;
    public $ville;

    // temporary
    public $email;
    public $telephone;

    public $titre;
    public $description;

    public function mount()
    {
        $annonceur = $this->annonce->user;
        $this->pseudo = $annonceur->pseudo;
        $this->ville = $annonceur->ville;

        //temporary
        $this->email = $annonceur->email;
        $this->telephone = $annonceur->telephone;

        $this->titre = $this->annonce->titre;
        $this->description = $this->annonce->description;
    }

    public function render()
    {
        return view('livewire.app.components.annonce');
    }
}
