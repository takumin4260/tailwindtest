@props(['text' => '新規作成', 'route' => ''])
<div class="mb-5">
    <a href="{{ $route }}" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-navy-800 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
        {{ $text }}
    </a>
</div>
