@props( ['name', 'lastEdit', 'tag', 'createdBy', 'url'] )
<div class="bg-white rounded-lg shadow-md overflow-hidden text-sm mb-5">
    <div class="aspect-video bg-gray-200"></div>
    <div class="py-4 px-2">
        <h5 class="text-gray-900 font-medium mb-12">{{ $name }}</h5>
        <p class="text-gray-500 text-center mb-6">最終編集日：{{ $lastEdit }}</p>
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-1">
                <x-parts.icon.tag/>
                <span class="text-gray-600 tracking-tight">{{ $tag }}</span>
            </div>
            <div class="flex items-center gap-2">
                <x-parts.icon.human/>
                <span class="text-gray-600">{{ $createdBy }}</span>
            </div>
        </div>
        <a href="{{ $url }}">
            <button
                class="w-full bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-md font-medium">
                編集する
            </button>
        </a>
    </div>
</div>
