<section class="w-full h-full">
    <div class="grid gap-4 place-items-center w-full h-full" x-show="$wire.published">
        <span>Votre annonce a été créée, vous pourrez la trouver dans l'espace "Mon Compte"</span>
        <button @click="$wire.set('published', false)">En publier une autre</button>
    </div>
    <div class="flex flex-col gap-4 justify-start p-4 w-full" x-show="!$wire.published">
        @forelse ($errors->all() as $error)
        {{ $error }}
        @empty

        @endforelse
        <span class="flex flex-col gap-2">
            <label for="titre">Titre de votre annonce</label>
            <x-input-field type="text" id="titre" wire:model="titre"></x-input-field>
        </span>
        <span class="flex flex-col gap-2">
            <label for="description">Description de votre annonce</label>
            <textarea type="text" id="description" wire:model="description" class="p-4 text-black rounded-md border-2 outline-none border-slate-300 font-poppins placeholder:text-slate-400"></textarea>
        </span>
        <span class="flex flex-row gap-2">
            <label for="publier">Publier l'annonce à la création ?</label>
            <input type="checkbox" id="publier" wire:model="publier" />
        </span>
        <x-button class="mr-auto" wire:click="store">Enregistrer</x-button>
    </div>
</section>
