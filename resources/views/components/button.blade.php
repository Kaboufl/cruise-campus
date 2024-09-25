@if($attributes['href'])
<a href="{{ $attributes['href']}}" {{ $attributes->merge(['class' => 'p-4 rounded-md border-2 border-primary bg-primary text-white text-center font-medium font-poppins outline-none']) }}>
    {{ $slot }}
</a>
@else
<button {{ $attributes->merge(['class' => 'p-4 rounded-md border-2 border-primary bg-primary text-white text-center font-medium font-poppins outline-none']) }}>
    {{ $slot }}
</button>
@endif
