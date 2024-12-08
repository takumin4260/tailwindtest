@props(['contents' => '項目を参考にストーリーを書き進めましょう。'])
<div class="bg-green-50 p-3 flex items-center gap-3">
    <img src="{{ url('storage/human_icon.png') }}" alt="ヒント" class="w-12 h-12 mt-0.5"/>
    <p class="text-green-800 text-sm">{{ $contents }}</p>
</div>
