@props([''])
<div class="flex items-center justify-center max-w-4xl mx-auto flex-wrap space-y-2">
    <img src="{{ url('storage/human_icon.png') }}" alt="" class="h-10 w-10 sm:mr-5"/>
    <p class="text-gray-600 flex-none text-center w-fit sm:text-md text-sm">
        以下の項目を記入すると、プロジェクトのイベントが作成できます。</p>
    <div class="flex items-center justify-center min-w-[160px]">
        <x-.parts.tab-complete>
            <x-slot:class>sm:ml-5 text-sm</x-slot:class>
        </x-stapedia.parts.tab-complete>
    </div>
</div>
