@props(['contents'])
<div class="bg-white rounded-lg shadow-sm sm:px-6 px-4 py-4 mb-8 flex items-center space-x-4">
    <img src="{{ url('storage/human_icon.png') }}" alt="" class="w-14 h-14 rounded-full">
    <div class="bg-admin flex items-center p-4 w-11/12">
        <p class="text-gray-700">{{ $contents }}</p>
    </div>
</div>
