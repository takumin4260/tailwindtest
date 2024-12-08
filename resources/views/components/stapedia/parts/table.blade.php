{{-- resources/views/components/data-table.blade.php --}}
<div class="flex flex-col mb-8">
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
                    @foreach($contents as $content)
                        <tr>
                            @foreach($content as $key => $value)
                                <td class="bg-white px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                    @if($value === 'action_normal')
                                        <div class="text-end">
                                            <a href="#"
                                               class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                                                編集
                                            </a>
                                            <span class="text-gray-500 dark:text-gray-400 mx-1">|</span>
                                            <a href="#"
                                               class="text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300">
                                                削除
                                            </a>
                                        </div>
                                        @continue
                                    @endif
                                    @if($value === 'action_check')
                                        <div class="text-end">
                                            <a href="#"
                                               class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                                                詳細を見る
                                            </a>
                                        </div>
                                        @continue
                                    @endif
                                        @if($value === 'action_all')
                                            <div class="text-end">
                                                <a href="#"
                                                   class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                                                    詳細
                                                </a>
                                                <span class="text-gray-500 dark:text-gray-400 mx-1">|</span>
                                                <a href="#"
                                                   class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                                                    編集
                                                </a>
                                                <span class="text-gray-500 dark:text-gray-400 mx-1">|</span>
                                                <a href="#"
                                                   class="text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300">
                                                    削除
                                                </a>
                                            </div>
                                            @continue
                                        @endif
                                    @if($value === 'todo_check')
                                        <div class="text-end">
                                            <a href="#"
                                               class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                                                todo入力
                                            </a>
                                            <span class="text-gray-500 dark:text-gray-400 mx-1">|</span>
                                            <a href="#"
                                               class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                                                編集
                                            </a>
                                            <span class="text-gray-500 dark:text-gray-400 mx-1">|</span>
                                            <a href="#"
                                               class="text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300">
                                                削除
                                            </a>
                                        </div>
                                        @continue
                                    @endif
                                        @if($value === 'student_check')
                                            <x-stapedia.parts.button-create :text="'生徒管理画面へ'" />
                                            @continue
                                        @endif
                                    {{ $value ?? '' }}
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
