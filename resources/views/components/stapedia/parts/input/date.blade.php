<?php
/**
 * The component for the single text input.
 *
 * @param array $option The array of options for the input.
 * @param string $option ['label'] The label of the input.
 * @param string $option ['required'] The required flag of the input.
 * @param string $option ['description'] The description of the input.
 * @param string $option ['placeholder'] The placeholder of the input.
 * @param string $option ['name'] The name of the input.
 * @param string $option ['isLast'] The flag to determine if the input is the last one.
 * @param string $option ['times'] The number of times to display the input.
 * @param string $option ['isAdded'] The flag to determine if the button to add the input is displayed.
 */
?>
@props(['option' => [], 'isDisc' => 'off'])

<div class="{{ isset($option['isLast']) && trim($option['isLast']) === 'on' ? 'mb-4' : 'mb-10' }}">
    <div class="flex items-center gap-2 mb-2">
        <label for="event-name"
               class="block text-sm font-medium text-gray-700">{{ $option['label'] }}</label>
        @if( trim($option['required']) === 'on' )
            <span
                class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
        @endif
    </div>
    @if( trim($isDisc) === "on")
    <p class="text-sm text-gray-600 mb-3">{{ $option['description'] }}</p>
    @endif

    <!-- 初期表示される入力フィールド -->
    <div id="inputContainer">
        @php
            $loopTimes = isset($option['times']) ? (int)$option['times'] : 1;
        @endphp
        @for( $index = 0; $index < $loopTimes; $index++ )
            <input
                type="date"
                id="{{ $option['name'] . $index }}"
                name="{{ $option['name'] . $index }}"
                class="block w-full rounded-md border-gray-300 border focus:border-green-500 focus:ring-green-500 sm:text-sm py-4 px-3 mb-5 text-slate-400"
                placeholder="{{ $option['placeholder'] }}"
            >
        @endfor
    </div>

    <!-- ボタンが表示されている場合 -->
    @if( isset($option['isAdded']) && trim($option['isAdded']) === 'on')
        <button type="button"
                id="isAddedButton"
                class="flex items-center justify-center w-8 h-8 rounded-full bg-green-700 hover:bg-green-800 text-white ml-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="M12 5v14M5 12h14"/>
            </svg>
        </button>
    @endif
</div>

<script>
    // 追加用のJavaScript
    document.getElementById('isAddedButton').addEventListener('click', function () {
        // inputContainerを取得
        const inputContainer = document.getElementById('inputContainer');

        // 新しいinputのIDとnameに付けるためのインデックスを計算
        const newIndex = inputContainer.getElementsByTagName('input').length;

        // 新しいinput要素を作成
        const newInput = document.createElement('input');
        newInput.type = 'date';
        newInput.id = '{{ $option['name'] }}' + newIndex;
        newInput.name = '{{ $option['name'] }}' + newIndex;
        newInput.className = 'block w-full rounded-md border-gray-300 border focus:border-green-500 focus:ring-green-500 sm:text-sm py-4 px-3 mb-5 text-slate-400';
        newInput.placeholder = '{{ $option['placeholder'] }}';

        // inputContainerに新しいinputを追加
        inputContainer.appendChild(newInput);
    });
</script>
