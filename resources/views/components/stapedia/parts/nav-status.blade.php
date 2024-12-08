@props(['status' => 'editing'])
<div class="inline-flex rounded-full border border-white overflow-hidden shadow-sm" role="group">
    <div class="px-8 py-1 text-xs font-medium @if( trim($status) === 'editing' ) text-white bg-navy-800 @else text-gray-700 bg-gray-100 @endif">
        編集
    </div>
    <div class="px-8 py-1 text-xs font-medium @if( trim($status) === 'advice' ) text-white bg-navy-800 @else text-gray-700 bg-gray-100 @endif">
        確認とアドバイス
    </div>
    <div class="px-8 py-1 text-xs font-medium @if( trim($status) === 'approved' ) text-white bg-navy-800 @else text-gray-700 bg-gray-100 @endif">
        承認
    </div>
</div>
