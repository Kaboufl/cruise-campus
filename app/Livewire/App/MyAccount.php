<?php

namespace App\Livewire\App;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class MyAccount extends Component
{
    public User $user;
    public $annonces;

    public function mount() {
        $this->user = Auth::user();
    }

    #[On('annoncePostee')]
    public function fetchAnnonces()
    {
        $this->annonces = $this->user->annonces()->get();
    }

    public function render()
    {
        return view('livewire.app.my-account');
    }
}
