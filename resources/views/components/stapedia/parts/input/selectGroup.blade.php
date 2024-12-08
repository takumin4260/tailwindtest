<?php
// SelectionGroupComponent.php
/**
 * The component for radio/checkbox selection group.
 *
 * @param array $option The array of options for the input group.
 * @param string $option['label'] The label of the group.
 * @param string $option['required'] Whether the field is required.
 * @param string $option['description'] The description text.
 * @param string $option['explanation_title'] The title of the explanation section.
 * @param string $option['explanation_text'] The explanation text.
 * @param string $option['name'] The name attribute for the inputs.
 * @param string $option['type'] The type of inputs ('radio' or 'checkbox').
 * @param array $option['choices'] Array of choices with labels and values.
 * @param string $option['grid_cols'] Number of grid columns (default: 2).
 * @param string $option['isLast'] Whether this is the last group in the form.
 */
?>
@props(['option' => []])

<div class="{{ isset($option['isLast']) && trim($option['isLast']) === 'on' ? 'mb-4' : 'mb-10' }}">
    <div class="flex items-center gap-2 mb-2">
        <label class="block text-sm font-medium text-gray-700">{{ $option['label'] }}</label>
        @if(trim($option['required']) === 'on')
            <span class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
        @endif
    </div>
    <p class="text-sm text-gray-600 mb-4">{{ $option['description'] }}</p>

    @if(isset($option['explanation_title']) || isset($option['explanation_text']))
        <div class="mt-2">
            @if(isset($option['explanation_title']))
                <p class="text-sm text-gray-600 mb-1 border-b-2 pb-2 mb-4">{{ $option['explanation_title'] }}</p>
            @endif
            @if(isset($option['explanation_text']))
                <p class="text-sm text-gray-600 mb-4">{!! $option['explanation_text'] !!}</p>
            @endif
        </div>
    @endif

    <div class="grid grid-cols-{{ $option['grid_cols'] ?? '2' }} {{ $option['grid_cols'] >= 3 ? 'sm:gap-4 gap-2 sm:text-md text-sm' : 'gap-4' }}">
        @foreach($option['choices'] as $choice)
            <label class="relative flex cursor-pointer">
                <input
                    type="{{ $option['type'] }}"
                    name="{{ $option['name'] }}{{ $option['type'] === 'checkbox' ? '[]' : '' }}"
                    value="{{ $choice['value'] }}"
                    class="sr-only peer"
                >
                <div class="flex items-center justify-center w-full {{ $option['grid_cols'] >= 3 ? 'sm:p-4 p-2' : 'p-4' }} text-center rounded border peer-checked:bg-green-500 peer-checked:text-white peer-checked:border-green-500 text-gray-600 border-gray-200">
                    {{ $choice['label'] }}
                </div>
            </label>
        @endforeach
    </div>
</div>
