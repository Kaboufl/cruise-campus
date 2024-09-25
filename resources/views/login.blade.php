<x-layout>
    <main class="w-full h-full grid place-items-center">
        <h1 class="font-bold text-3xl">Connexion</h1>
        <section class="flex flex-col gap-4 justify-between items-center w-full p-2">
            @if($errors->any())
            <ul class=""></ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            @endif
            <form action="" method="POST" class="flex flex-col gap-4 text-white">
                @csrf
                <input type="email" name="email" placeholder="Email" class="px-4 py-2 rounded-3xl bg-slate-500">
                <input type="password" name="password" placeholder="Mot de passe" class="px-4 py-2 rounded-3xl bg-slate-500">
                <span class="flex flex-row items-center justify-center">
                    <button type="submit" class="col-span-2 px-4 py-2 rounded-3xl bg-slate-500 w-fit mx-auto">Se connecter</button>
                    <a class="text-black" href="{{ route('register') }}">S'inscrire</a>
                </span>
            </form>
        </section>
    </main>
</x-layout>
