@props(['wFull' => 'off', 'title'])
<main class="flex-1 overflow-y-auto pt-14">
    <div class="flex-1 overflow-y-auto bg-admin">
        <div class="w-full. @if($wFull == 'on') sm:w-7/8 @else sm:w-3/4 @endif mx-auto py-8 px-4">
            <h1 class="text-2xl font-semibold text-black mb-10">{{ $title }}</h1>
            {{ $slot }}
        </div>
    </div>
    <footer class="h-14 flex items-center bg-navy-800 text-white">
        <div class="mx-auto text-center">
            <h2 class="text-base font-light">©Saas, inc.</h2>
        </div>
    </footer>
</main>
