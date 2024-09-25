<main class="flex flex-col gap-2 p-2 h-full">
    <section class="block flex-grow h-full">
        <div class="w-full h-full" x-show="$wire.selectedScreen == 'discover'" x-transitions>
            <livewire:app.liste-annonces :annonces="$annonces"/>
        </div>

        <div class="w-full h-full" x-show="$wire.selectedScreen == 'publish'" x-transitions>
            <livewire:app.new-annonce />
        </div>

        <div class="w-full h-full" x-show="$wire.selectedScreen == 'account'" x-transitions>
            <livewire:app.my-account />
        </div>
    </section>
    <livewire:app.menu />
</main>
