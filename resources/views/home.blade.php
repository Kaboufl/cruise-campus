
@section('title') CruiseCampus - Acceuil @endsection

<x-layout>
    <main class="w-full h-full grid place-items-center">
        <h1 class="font-bold text-3xl">CampusCruise</h1>
        <section class="flex flex-col gap-4 justify-between items-center">
            <a href="{{ route('register') }}" class="px-4 py-2 rounded-3xl bg-slate-500">S'inscrire</a>
            <button class="px-4 py-2 rounded-3xl bg-slate-500">Se connecter</button>
        </section>
    </main>
</x-layout>
