<x-layout>
    <main class="grid place-items-center w-full h-full">
        <h1 class="text-3xl font-medium text-center">Inscrivez-vous dès maintenant !</h1>
        <section class="flex flex-col gap-4 justify-between items-center p-2 w-full">
            @if($errors->any())
            <ul class=""></ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            @endif
            <form action="" method="POST" class="flex flex-col gap-4 px-4 w-full text-white">
                @csrf
                <x-input-field type="text" name="nom" placeholder="Nom"></x-input-field>
                <x-input-field type="text" name="prenom" placeholder="Prénom"></x-input-field>
                <x-input-field type="email" name="email" placeholder="Email"></x-input-field>
                <x-input-field type="text" name="ville" placeholder="Ville"></x-input-field>
                <x-input-field type="text" name="pseudo" placeholder="Pseudonyme" id="pseudo"></x-input-field>
                <x-input-field type="tel" name="telephone" pattern="\+\d{2}\d{1}(?:\d{2}){4}" placeholder="Téléphone (+33...)" id="telephone"></x-input-field>
                <select name="campus" id="campus" class="p-4 text-black bg-white rounded-md border-2 outline-none border-slate-300 font-poppins placeholder:text-slate-400">
                    <option value="" disabled selected>Veuillez sélectionner un campus</option>
                    @foreach($listeCampus as $campus)
                    <option value="{{ $campus->id }}">{{ $campus->nom }}</option>
                    @endforeach
                </select>
                <x-input-field type="password" name="password" placeholder="Mot de passe"></x-input-field>
                <x-input-field type="password" name="password_confirmation" placeholder="Confirmer le mot de passe"></x-input-field>
                <x-button type="submit" class="col-span-2">S'inscrire</x-button>
            </form>
        </section>
    </main>
</x-layout>
