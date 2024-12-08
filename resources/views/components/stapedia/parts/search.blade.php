{{-- resources/views/components/search-form.blade.php --}}
<div class="w-full max-w-5xl mx-auto p-4">
    <form action="#" method="GET" class="grid gap-6">
        <div class="grid md:grid-cols-2 gap-6">
            @foreach($fields as $columnIndex => $column)
                <div class="space-y-4">
                    @foreach($column as $field)
                        <div class="grid gap-2">
                            <label for="{{ $field['name'] }}" class="text-sm">{{ $field['label'] }}</label>

                            @if($field['type'] === 'select')
                                <select id="{{ $field['name'] }}" name="{{ $field['name'] }}"
                                        class="w-full px-3 py-2 border rounded-md">
                                    <option value="">{{ $field['placeholder'] ?? '-' }}</option>
                                    @foreach($field['options'] as $option)
                                        <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
                                    @endforeach
                                </select>

                            @elseif($field['type'] === 'date-range')
                                <div class="flex gap-2 items-center">
                                    <input type="date"
                                           name="{{ $field['name'] }}_from"
                                           class="flex-1 px-3 py-2 border rounded-md"
                                           placeholder="{{ $field['placeholder'] ?? '' }}">
                                    <span>~</span>
                                    <input type="date"
                                           name="{{ $field['name'] }}_to"
                                           class="flex-1 px-3 py-2 border rounded-md"
                                           placeholder="{{ $field['placeholder'] ?? '' }}">
                                </div>

                            @else
                                <input type="{{ $field['type'] }}"
                                       id="{{ $field['name'] }}"
                                       name="{{ $field['name'] }}"
                                       placeholder="{{ $field['placeholder'] ?? '' }}"
                                       class="w-full px-3 py-2 border rounded-md">
                            @endif
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

        <div class="flex items-center justify-center">
            <div class="flex gap-2">
                <button type="reset" class="px-4 py-2 border bg-white rounded-md">
                    クリア
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="w-4 h-4">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    この条件で表示する
                </button>
            </div>
        </div>
    </form>
</div>
