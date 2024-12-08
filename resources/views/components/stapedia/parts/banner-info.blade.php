@props(['contents'])
<div class="h-14 flex items-center justify-center bg-navy-800 text-white gap-6">
    <x-parts.icon.info/>
    <h2 class="text-sm font-light">{{ $contents }}</h2>
</div>
