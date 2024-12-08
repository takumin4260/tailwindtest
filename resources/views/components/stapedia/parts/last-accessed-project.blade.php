@props(['project' => 'イベント名'])
<div class="flex justify-center items-center mb-8 sm:space-x-32 flex-wrap space-y-4">
    <h3 class="text-gray-700">最後にアクセスしたプロジェクト：{{ $project }}</h3>
    <button
        class="bg-yellow-400 hover:bg-yellow-500 px-4 py-2 rounded-md font-medium text-white">
        編集を再開する
    </button>
</div>
