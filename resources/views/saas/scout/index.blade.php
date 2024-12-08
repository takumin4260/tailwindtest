<x-saas.outline>
    <x-saas.main-inner>
        <x-slot:wFull>on</x-slot:wFull>
        <x-slot:title>スカウト文一覧</x-slot:title>

        @php
            // テーブルヘッダーの定義
            $headers = [
                ['key' => 'name', 'label' => 'スカウト文名'],
                ['key' => 'created_at', 'label' => '作成日'],
                ['key' => 'updated_at', 'label' => '最終更新日'],
                ['key' => 'job_type', 'label' => '職種'],
                ['key' => 'status', 'label' => 'ステータス'],
                ['key' => 'actions', 'label' => '操作', 'align' => 'end']
            ];

            // ペルソナデータの定義
            $personas = [
                [
                    'name' => '「ペルソナ①用スカウト文」',
                    'created_at' => '2023-05-15',
                    'updated_at' => '2023-06-01',
                    'job_type' => 'フルスタックエンジニア',
                    'status' => [
                        'label' => '使用中',
                        'color' => 'green'
                    ]
                ],
                [
                    'name' => 'ペルソナ②用スカウト文',
                    'created_at' => '2023-04-20',
                    'updated_at' => '2023-05-10',
                    'job_type' => 'UIデザイナー',
                    'status' => [
                        'label' => '未使用',
                        'color' => 'yellow'
                    ]
                ]
            ];
        @endphp

        <div class="w-full max-w-5xl mx-auto p-4">
            <form action="#" method="GET" class="grid gap-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div class="grid gap-2">
                            <label for="sender" class="text-sm">ペルソナ名</label>
                            <input type="text" id="sender" name="sender" placeholder="送信者名を入力" class="w-full px-3 py-2 border rounded-md">
                        </div>
                        <div class="grid gap-2">
                            <label for="recipient" class="text-sm">職種</label>
                            <input type="text" id="recipient" name="recipient" placeholder="送信対象者名を入力" class="w-full px-3 py-2 border rounded-md">
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="grid gap-2">
                            <label for="date" class="text-sm">作成日</label>
                            <div class="flex gap-2 items-center">
                                <input type="date" name="date_from" class="flex-1 px-3 py-2 border rounded-md">
                                <span>~</span>
                                <input type="date" name="date_to" class="flex-1 px-3 py-2 border rounded-md">
                            </div>
                        </div>
                        <div class="grid gap-2">
                            <label for="status" class="text-sm">ステータス</label>
                            <select id="status" name="status" class="w-full px-3 py-2 border rounded-md">
                                <option value="">-</option>
                                <option value="all">すべて</option>
                                <option value="sent">送信済み</option>
                                <option value="pending">送信待ち</option>
                                <option value="failed">送信失敗</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div class="flex gap-2">
                        <button type="reset" class="px-4 py-2 border bg-white rounded-md">クリア</button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
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
            <!-- 新規作成ボタン -->
            <div class="mb-5">
                <a href="#" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-navy-800 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                    新規ペルソナ作成
                </a>
            </div>

            <!-- テーブル -->
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    @foreach($headers as $header)
                                        <th scope="col" class="px-6 py-3 text-{{ $header['align'] ?? 'start' }} text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                            {{ $header['label'] }}
                                        </th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach($personas as $persona)
                                    <tr>
                                        <td class="bg-white px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $persona['name'] }}
                                        </td>
                                        <td class="bg-white px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $persona['created_at'] }}
                                        </td>
                                        <td class="bg-white px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $persona['updated_at'] }}
                                        </td>
                                        <td class="bg-white px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $persona['job_type'] }}
                                        </td>
                                        <td class="bg-white px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                    <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-{{ $persona['status']['color'] }}-100 text-{{ $persona['status']['color'] }}-800 dark:bg-{{ $persona['status']['color'] }}-900 dark:text-{{ $persona['status']['color'] }}-200">
                                        {{ $persona['status']['label'] }}
                                    </span>
                                        </td>
                                        <td class="bg-white px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="#" class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">編集</a>
                                            <span class="text-gray-500 dark:text-gray-400 mx-1">|</span>
                                            <a href="#" class="text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300">削除</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-saas.main-inner>
</x-saas.outline>
