<x-stapedia.user.outline>
    <x-stapedia.main-inner>
        <x-slot:title>TOP</x-slot:title>
        <form class="space-y-12">
            <div class="py-10 px-2 sm:px-8">
                @php
                    $goalHeaders = [
                        ['label' => '教科'],
                        ['label' => '教材'],
                        ['label' => '進捗'],
                    ];

                    $goalContents = [
                        [
                            '国語',
                            '教材A',
                            '30%'
                        ],
                        [
                            '数学',
                            '教材B',
                            '20%'
                        ],
                        [
                            '数学',
                            '教材C',
                            '50%'
                        ],
                    ];
                @endphp
                <h1 class="text-lg font-semibold text-gray-800 mb-10">今月取り組む教材</h1>
                <x-stapedia.parts.table :headers="$goalHeaders" :contents="$goalContents" />
                @php
                    $headers = [
                        ['label' => '教科'],
                        ['label' => '教材'],
                        ['label' => '進める量'],
                    ];

                    $contents = [
                        [
                            '国語',
                            '教材A',
                            '5ページ',
                        ],
                    ];
                @endphp
                <h1 class="text-lg font-semibold text-gray-800 mb-10">今日のタスク</h1>
                <x-stapedia.parts.table :headers="$headers" :contents="$contents" />
            </div>

            <div class="flex items-center justify-center gap-20">
                <button
                    type="submit"
                    name="action"
                    value="temp_save"
                    class="w-fit max-w-xs bg-navy-800 text-white rounded-sm px-10 py-3 text-sm font-medium hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                >
                    進捗入力へ
                </button>
            </div>
        </form>
    </x-stapedia.main-inner>
</x-stapedia.user.outline>
