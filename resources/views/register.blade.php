<x-layout>
    <main class="w-full h-full grid place-items-center">
        <h1 class="font-bold text-3xl">Inscription</h1>
        <section class="flex flex-col gap-4 justify-between items-center w-full p-2">
            @if($errors->any())
            <ul class=""></ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            @endif
            <form action="" method="POST" class="grid grid-cols-2 gap-4 w-3/4 text-white">
                @csrf
                <input type="text" name="nom" placeholder="Nom" class="px-4 py-2 rounded-3xl bg-slate-500">
                <input type="text" name="prenom" placeholder="Prénom" class="px-4 py-2 rounded-3xl bg-slate-500">
                <input type="email" name="email" placeholder="Email" class="col-span-2 px-4 py-2 rounded-3xl bg-slate-500">
                <input type="text" name="ville" placeholder="Ville" class="col-span-2 px-4 py-2 rounded-3xl bg-slate-500">
                <input type="text" name="pseudo" placeholder="Pseudonyme" id="pseudo" class="px-4 py-2 rounded-3xl bg-slate-500">
                <input type="tel" name="telephone" pattern="\+\d{2}\d{1}(?:\d{2}){4}" placeholder="Téléphone (+33...)" id="telephone" class="px-4 py-2 rounded-3xl bg-slate-500">
                <select name="campus" id="campus" class="col-span-2 px-4 py-2 rounded-3xl bg-slate-500">
                    <option value="" disabled selected>Veuillez sélectionner un campus</option>
                    @foreach($listeCampus as $campus)
                    <option value="{{ $campus->id }}">{{ $campus->nom }}</option>
                    @endforeach
                </select>
                <input type="password" name="password" placeholder="Mot de passe" class="px-4 py-2 rounded-3xl bg-slate-500">
                <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" class="px-4 py-2 rounded-3xl bg-slate-500">
                <button type="submit" class="col-span-2 px-4 py-2 rounded-3xl bg-slate-500 w-fit mx-auto">S'inscrire</button>
            </form>
        </section>
    </main>
</x-layout>
