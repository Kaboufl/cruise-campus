<div class="block p-2 space-y-4 rounded-xl border shadow-md border-slate-600" x-data="{}">
    <div class="flex flex-row justify-around w-full">
        <span class="flex flex-row gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            <span>{{ $pseudo }}</span>
        </span>
        <span class="flex flex-row gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg>
            <span>Part de : <b>{{ $ville }}</b></span>
        </span>
    </div>

    <div class="grid grid-cols-[1fr_auto] grid-rows-2 justify-center">
        <h3 class="col-start-1 text-lg font-medium">{{ $titre }}</h3>
        <p class="col-start-1">{{ $description }}</p>
        <x-button x-on:click="$refs.dialog.showModal()" class="col-start-2 row-span-2 row-start-1 my-auto">Covoiturer</x-button>
    </div>

    <dialog id="infos-conducteur-{{ $pseudo }}" x-ref="dialog" class="relative top-1/4 p-6 pt-2 rounded-xl shadow-xl min-w-96">
        <header class="flex flex-row justify-between">
            <h3 class="col-start-1 text-lg font-medium">Coordonnées du conducteur</h3>
            <button x-on:click="$refs.dialog.close()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </header>
        <div class="flex flex-col gap-2 px-4 py-2">
            <p>Adresse e-mail : {{ $email }}</p>
            <p>Téléphone : {{ $telephone }}</p>
        </div>
    </dialog>
</div>
