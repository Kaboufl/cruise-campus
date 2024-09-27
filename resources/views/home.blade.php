
@section('title') CruiseCampus - Acceuil @endsection

<x-layout>
    <main class="grid place-items-center w-full h-full">
        <h1 class="text-3xl font-bold">CampusCruise</h1>
        <section class="flex flex-col gap-4 justify-between items-stretch w-full">
            <x-button href="{{ route('register') }}" class="w-full">S'inscrire</x-button>
            <x-button href="{{ route('login') }}" class="w-full">Se connecter</x-button>
        </section>
    </main>
</x-layout>
