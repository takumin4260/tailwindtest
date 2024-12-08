<?php
/**
 * The component for the single select input.
 *
 * @param array $option The array of options for the input.
 * @param string $option['label'] The label of the select.
 * @param string $option['required'] The required flag of the select.
 * @param string $option['description'] The description of the select.
 * @param string $option['name'] The name of the select.
 * @param string $option['isLast'] The flag to determine if the select is the last one.
 * @param array $option['choices'] The array of choices for the select.
 *                                Each choice should have 'value' and 'label' keys.
 */
?>
@props(['option' => [], 'isDisc' => 'off'])

<div class="{{ isset($option['isLast']) && trim($option['isLast']) === 'on' ? 'mb-4' : 'mb-10' }}">
    <div class="flex items-center gap-2 mb-2">
        <label for="{{ $option['name'] }}"
               class="block text-sm font-medium text-gray-700">{{ $option['label'] }}</label>
        @if( trim($option['required']) === 'on' )
            <span class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
        @endif
    </div>
    @if( trim($isDisc) === "on")
    <p class="text-sm text-gray-600 mb-3">{{ $option['description'] }}</p>
    @endif
    <select
        id="{{ $option['name'] }}"
        name="{{ $option['name'] }}"
        class="block w-full rounded-md border-gray-300 border focus:border-green-500 focus:ring-green-500 sm:text-sm py-4 px-3"
    >
        @foreach($option['choices'] as $choice)
            <option value="{{ $choice['value'] }}">{{ $choice['label'] }}</option>
        @endforeach
    </select>
</div>
