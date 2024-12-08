<x-saas.outline>
    <x-saas.main-inner>
        <x-slot:title>企業情報入力</x-slot:title>
        <form class="space-y-12">
            <div class="bg-white py-10 px-2 sm:px-8">
                @php
                    $fields = [
                        ['name' => 'company_name', 'label' => '企業名', 'type' => 'text', 'required' => true],
                        ['name' => 'industry', 'label' => '業種', 'type' => 'select', 'required' => true, 'options' => ['IT', '製造業', 'サービス業', '小売業', '金融業']],
                        ['name' => 'company_size', 'label' => '企業規模', 'type' => 'select', 'required' => true, 'options' => ['1-50人', '51-200人', '201-500人', '501-1000人', '1001人以上']],
                        ['name' => 'headquarters', 'label' => '本社所在地', 'type' => 'text', 'required' => true],
                        ['name' => 'company_url', 'label' => '企業URL', 'type' => 'url', 'required' => false],
                    ];
                @endphp

                @foreach ($fields as $field)
                    <div class="mb-10">
                        <div class="flex items-center gap-2 mb-2">
                            <label for="{{ $field['name'] }}" class="block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
                            @if ($field['required'])
                                <span class="inline-flex items-center bg-gray-700 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
                            @endif
                        </div>
                        @if ($field['type'] === 'select')
                            <select
                                id="{{ $field['name'] }}"
                                name="{{ $field['name'] }}"
                                class="block w-full rounded-md border-gray-300 border focus:border-green-500 focus:ring-green-500 sm:text-sm py-4 px-3"
                                {{ $field['required'] ? 'required' : '' }}
                            >
                                <option value="">選択してください</option>
                                @foreach ($field['options'] as $option)
                                    <option value="{{ $option }}">{{ $option }}</option>
                                @endforeach
                            </select>
                        @else
                            <input
                                type="{{ $field['type'] }}"
                                id="{{ $field['name'] }}"
                                name="{{ $field['name'] }}"
                                class="block w-full rounded-md border-gray-300 border focus:border-green-500 focus:ring-green-500 sm:text-sm py-4 px-3"
                                placeholder="入力はこちら"
                                {{ $field['required'] ? 'required' : '' }}
                            >
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="flex items-center justify-center gap-20">
                <button
                    type="submit"
                    name="action"
                    value="temp_save"
                    class="w-fit max-w-xs bg-navy-800 text-white rounded-sm px-10 py-3 text-sm font-medium hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                >
                    一時保存
                </button>
                <button
                    type="submit"
                    name="action"
                    value="save"
                    class="w-fit max-w-xs bg-navy-800 text-white rounded-sm px-10 py-3 text-sm font-medium hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                >
                    保存する
                </button>
            </div>
        </form>
    </x-saas.main-inner>
</x-saas.outline>
