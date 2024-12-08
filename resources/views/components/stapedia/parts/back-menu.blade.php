@props(['url' => '#', 'contents' => 'イベント編集'])
<div class="mb-6">
    <a href="{{ $url }}" class="inline-flex items-center text-sm text-blue-600 hover:text-blue-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"/>
        </svg>
        {{ $contents }}に戻る
    </a>
</div>
