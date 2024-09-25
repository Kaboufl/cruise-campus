<x-layout>
    <main class="grid place-items-center w-full h-full">
        <h1 class="text-3xl font-bold">Connexion</h1>
        <section class="flex flex-col gap-4 justify-between items-center p-2 w-full">
            @if($errors->any())
            <ul class=""></ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            @endif
            <form action="" method="POST" class="flex flex-col gap-4 text-white">
                @csrf
                <x-input-field type="email" name="email" placeholder="Email"></x-input-field>
                <x-input-field type="password" name="password" placeholder="Mot de passe"></x-input-field>
                <x-button type="submit">Se connecter</x-button>
                <a class="text-black" href="{{ route('register') }}">S'inscrire</a>
            </form>
        </section>
    </main>
</x-layout>
