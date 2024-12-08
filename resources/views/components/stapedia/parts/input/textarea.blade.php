<?php
/**
 * The component for the textarea input.
 *
 * @param array $option The array of options for the textarea.
 * @param string $option['label'] The label of the textarea.
 * @param string $option['required'] The required flag of the textarea.
 * @param string $option['description'] The description of the textarea.
 * @param string $option['placeholder'] The placeholder of the textarea.
 * @param string $option['name'] The name of the textarea.
 * @param string $option['isLast'] The flag to determine if the textarea is the last one.
 */
?>
@props(['option' => [], 'isDisc' => 'off'])

<div class="{{ isset($option['isLast']) && trim($option['isLast']) === 'on' ? 'mb-4' : 'mb-10' }}">
    <div class="flex items-center gap-2 mb-2">
        <label for="{{ $option['name'] }}"
               class="block text-sm font-medium text-gray-700">{{ $option['label'] }}</label>
        @if( trim($option['required']) === 'on' )
            <span
                class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
        @endif
    </div>
    @if( trim($isDisc) === "on")
        <p class="text-sm text-gray-600 mb-3">{{ $option['description'] }}</p>
    @endif
    <textarea
        id="{{ $option['name'] }}"
        name="{{ $option['name'] }}"
        rows="4"
        class="block w-full rounded-md border-gray-300 border focus:border-green-500 focus:ring-green-500 sm:text-sm py-4 px-3"
        placeholder="{{ $option['placeholder'] }}"
    ></textarea>
</div>
