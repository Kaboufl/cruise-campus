<section class="block w-full h-full">
    <div class="flex flex-row gap-2">
        <x-input-field class="flex-grow" placeholder="Rechercher par ville" wire:model="query"></x-input-field>
        <x-button>Rechercher</x-button>
    </div>
    <div class="flex flex-col gap-4 px-2 py-4">
        {{-- @dump($annonces) --}}

        @foreach($annonces as $annonce)
        <livewire:app.components.annonce :annonce="$annonce" />
        @endforeach
    </div>
</section>
