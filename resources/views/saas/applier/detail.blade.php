@php
    $userName = '山田太郎';
    $currentStep = 2;
    $progressPercentage = 25;
    $phoneNumber = '090-1234-5678';
    $isContactCompleted = false;
    $userId = 1;
@endphp
<x-saas.outline>
    <x-saas.main-inner>
        <x-slot:title>{{ $userName }}さん 進捗状況</x-slot:title>
        {{-- 進捗ステップ --}}
        <div class="relative mb-12 w-3/4 m-auto">
            <div class="flex justify-between items-center">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="relative">
                        <div
                            class="w-16 h-16 text-xl rounded-full flex items-center justify-center {{ $i <= $currentStep ? 'bg-teal-600 text-gray-300' : ($i == $currentStep + 1 ? 'bg-cyan-300 text-white' : 'bg-cyan-300 text-white') }}">
                            {{ $i }}
                        </div>
                        @if ($i < 6)
                            <div
                                class="absolute w-full h-1 bg-{{ $i < $currentStep ? 'teal-600' : 'cyan-300' }} left-full top-1/2 -translate-y-1/2"></div>
                        @endif
                    </div>
                @endfor
            </div>
        </div>

        {{-- アラートカード --}}
        <div class="border rounded-lg overflow-hidden w-3/4 m-auto">
            {{-- アラートヘッダー --}}
            <div class="bg-blue-500 text-white p-4 flex justify-between items-center">
                <h3 class="text-lg font-bold">進捗アラート</h3>
                <span>{{ $progressPercentage }}%完了</span>
            </div>

            {{-- アラート内容 --}}
            <div class="p-6 bg-white">
                <div class="flex gap-6">
                    <div class="w-16">
                        <img src="{{ asset('storage/human_icon.png') }}" alt="アラートアイコン" class="w-full">
                    </div>
                    <div class="flex-1 space-y-4">
                        <div class="bg-gray-100 rounded-lg p-4">
                            <p class="">明日は{{ $userName }}さんの次回情報発信の対象日です</p>
                        </div>
                        <div class="bg-gray-100 rounded-lg p-4">
                            <p class="mb-2">連絡をお願いします。</p>
                        </div>
                        @if (!$isContactCompleted)
                            <div class="text-right">
                                <input type="hidden" name="user_id" value="{{ $userId }}">
                                <button  id="target-button"
                                         class="bg-white px-6 py-2 rounded-full hover:bg-blue-600 transition-colors border-2 border-blue-500 text-blue-500">
                                    対応完了
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </x-saas.main-inner>
</x-saas.outline>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        let progressPercentage = {{ $progressPercentage }};

        $('#target-button').on('click', function (e) {
            e.preventDefault(); // デフォルトのフォーム送信を防止

            // 進捗率を更新
            progressPercentage = Math.min(progressPercentage + 5, 100);
            $('.bg-blue-500 span').text(`${progressPercentage}%完了`);

            // ポップアップメッセージの表示
            const popup = $('<div>')
                .text('更新しました')
                .css({
                    position: 'fixed',
                    top: '20px',
                    right: '50%',
                    width: '200px',
                    height: 'auto',
                    textAlign: 'center',
                    transform: 'translateX(50%)',
                    padding: '10px 20px',
                    backgroundColor: '#38a169', // 緑色
                    color: 'white',
                    borderRadius: '8px',
                    boxShadow: '0 2px 6px rgba(0, 0, 0, 0.2)',
                    zIndex: 1000,
                    display: 'none',
                    opacity: 0.9,
                });

            $('body').append(popup);
            popup.fadeIn(300).delay(2000).fadeOut(300, function () {
                $(this).remove(); // 完了後に要素を削除
            });
        });
    });
</script>
