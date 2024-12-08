@props(['title', 'subtitle', 'status' => 'valid'])
<div class="bg-white rounded-xl shadow-md px-6 py-8 flex items-center justify-between hover:shadow-md transition-shadow">
    <div class="flex items-start space-x-4">
        @if( trim($status) === 'valid')
            <x-parts.icon.check-on>
                <x-slot:class>mt-1</x-slot:class>
            </x-parts.icon.check-on>
        @else
        <x-parts.icon.check-off>
            <x-slot:class>mt-1</x-slot:class>
        </x-parts.icon.check-off>
        @endif
        <div>
            <h3 class="font-medium text-gray-900 mb-4">{{ $title }}</h3>
            <p class="text-sm text-gray-500">{{ $subtitle }}</p>
        </div>
    </div>
    <x-parts.icon.arrow-lg />
</div>
