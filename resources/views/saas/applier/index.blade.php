<x-saas.outline>
    <x-saas.main-inner>
        <x-slot:title>応募者一覧</x-slot:title>

        @php
            // テーブルヘッダーの定義
            $headers = [
                ['key' => 'name', 'label' => '応募者名'],
                ['key' => 'updated_at', 'label' => '応募媒体'],
                ['key' => 'created_at', 'label' => '応募日'],
                ['key' => 'action_at', 'label' => '最終操作日'],
                ['key' => 'proceed', 'label' => '進捗'],
                ['key' => 'actions', 'label' => '操作']
            ];

            // ペルソナデータの定義
            $personas = [
                [
                    'name' => '山田太郎',
                    'updated_at' => 'indeed',
                    'created_at' => '2022-03-26',
                    'action_at' => '2023-11-17',
                    'proceed' => '2',
                ],
                [
                    'name' => '佐藤一郎',
                    'updated_at' => 'indeed',
                    'created_at' => '2023-01-22',
                    'action_at' => '2023-07-08',
                    'proceed' => '5',
                ],
                [
                    'name' => '伊藤大輔',
                    'updated_at' => 'indeed',
                    'created_at' => '2022-08-09',
                    'action_at' => '2023-08-09',
                    'proceed' => '4',
                ],
                [
                    'name' => '加藤春香',
                    'updated_at' => 'indeed',
                    'created_at' => '2022-10-02',
                    'action_at' => '2023-12-02',
                    'proceed' => '5',
                ],
                [
                    'name' => '鈴木花子',
                    'updated_at' => 'indeed',
                    'created_at' => '2022-01-21',
                    'action_at' => '2023-07-12',
                    'proceed' => '5',
                ],
                [
                    'name' => '伊藤大輔',
                    'updated_at' => 'indeed',
                    'created_at' => '2022-05-26',
                    'action_at' => '2023-11-10',
                    'proceed' => '1',
                ],
                [
                    'name' => '鈴木花子',
                    'updated_at' => 'indeed',
                    'created_at' => '2022-11-26',
                    'action_at' => '2023-10-31',
                    'proceed' => '4',
                ],
                [
                    'name' => '中村美咲',
                    'updated_at' => 'indeed',
                    'created_at' => '2022-11-27',
                    'action_at' => '2023-11-29',
                    'proceed' => '1',
                ],
                [
                    'name' => '山本健太',
                    'updated_at' => 'indeed',
                    'created_at' => '2023-03-09',
                    'action_at' => '2023-09-01',
                    'proceed' => '3',
                ],
                [
                    'name' => '中村美咲',
                    'updated_at' => 'indeed',
                    'created_at' => '2022-10-17',
                    'action_at' => '2023-08-04',
                    'proceed' => '6',
                ],
            ];

        @endphp

        <div class="w-full max-w-5xl mx-auto p-4">
            <form action="#" method="GET" class="grid gap-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div class="grid gap-2">
                            <label for="sender" class="text-sm">応募者名</label>
                            <input type="text" id="sender" name="sender" placeholder="応募者名を入力"
                                   class="w-full px-3 py-2 border rounded-md">
                        </div>
                        <div class="grid gap-2">
                            <label for="status" class="text-sm">進捗</label>
                            <select id="status" name="status" class="w-full px-3 py-2 border rounded-md">
                                <option value="">-</option>
                                <option value="all">すべて</option>
                                <option value="sent">送信済み</option>
                                <option value="pending">送信待ち</option>
                                <option value="failed">送信失敗</option>
                            </select>
                        </div>
                        <div class="grid gap-2">
                            <label for="date" class="text-sm">最終操作日</label>
                            <div class="flex gap-2 items-center">
                                <input type="date" name="date_from" class="flex-1 px-3 py-2 border rounded-md">
                                <span>~</span>
                                <input type="date" name="date_to" class="flex-1 px-3 py-2 border rounded-md">
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="grid gap-2">
                            <label for="status" class="text-sm">応募媒体</label>
                            <select id="status" name="status" class="w-full px-3 py-2 border rounded-md">
                                <option value="">-</option>
                                <option value="all">indeed</option>
                            </select>
                        </div>
                        <div class="grid gap-2">
                            <label for="date" class="text-sm">応募日</label>
                            <div class="flex gap-2 items-center">
                                <input type="date" name="date_from" class="flex-1 px-3 py-2 border rounded-md">
                                <span>~</span>
                                <input type="date" name="date_to" class="flex-1 px-3 py-2 border rounded-md">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div class="flex gap-2">
                        <button type="reset" class="px-4 py-2 border bg-white rounded-md">クリア</button>
                        <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded-md flex items-center gap-2">
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

        <div class="w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

            <!-- テーブル -->
            <div class="flex flex-col mb-4">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    @foreach($headers as $header)
                                        <th scope="col"
                                            class="px-6 py-3 text-{{ $header['align'] ?? 'start' }} text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                            {{ $header['label'] }}
                                        </th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach($personas as $persona)
                                    <tr>
                                        <td class="bg-white px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-500 dark:text-gray-200">
                                            {{ $persona['name'] }}
                                        </td>
                                        <td class="bg-white px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $persona['updated_at'] }}
                                        </td>
                                        <td class="bg-white px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $persona['created_at'] }}
                                        </td>
                                        <td class="bg-white px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $persona['action_at'] }}
                                        </td>
                                        <td class="bg-white px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <div
                                                class="w-8 h-8 text-md rounded-full flex items-center justify-center bg-teal-600 text-white">
                                                {{ $persona['proceed'] }}
                                            </div>
                                        </td>
                                        <td class="bg-white px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ route('saas.applier.detail') }}"
                                               class="text-green-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300">進捗</a>
                                            <span class="text-gray-500 dark:text-gray-400 mx-1">|</span>
                                            <a href="{{ route('saas.applier.action') }}"
                                               class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">アクション一覧</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <x-saas.parts.nav></x-saas.parts.nav>
        </div>
    </x-saas.main-inner>
</x-saas.outline>
