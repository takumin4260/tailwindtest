@php
    $userName = '山田太郎';
    $currentStep = 2;
    $isContactCompleted = false;
@endphp
<x-saas.outline>
    <x-saas.main-inner>
        <x-slot:title>{{ $userName }}さん アクション一覧</x-slot:title>
        {{-- 進捗ステップ --}}
        <div class="mx-auto p-4 mb-12">
            <div class="flex flex-wrap justify-between gap-4">
                @php
                    $processes = [
                        [
                            'title' => '書類選考',
                            'status' => '書類選考終了',
                            'tasks' => [
                                '選考評価・検討',
                                '通過者の振り分け',
                                '通過通知',
                                '適正テスト日程調整',
                                '次回情報の送信',
                            ],
                            'completed' => true
                        ],
                        [
                            'title' => '適正テスト',
                            'status' => '適正テスト完了',
                            'tasks' => [
                                '適正評価・検討',
                                '通過者の振り分け',
                                '通過通知',
                                '面接日程調整',
                                '次回情報の送信',
                            ],
                            'completed' => false
                        ],
                        [
                            'title' => '1次・2次面談',
                            'status' => '1次・2次面談完了',
                            'tasks' => [
                                '面談評価・検討',
                                '合格者の振り分け',
                                '合否通知',
                                '合格者に対しての内定承諾書送信',
                            ],
                            'completed' => false
                        ],
                    ];
                @endphp

                @foreach ($processes as $processIndex => $process)
                    <div class="w-full sm:w-[calc(33.333%-1rem)] bg-white border rounded-lg shadow-sm h-fit">
                        <div class="p-4 border-b">
                            <h3 class="text-lg font-semibold">{{ $process['title'] }}</h3>
                            <p class="text-sm text-gray-600">現在：{{ $process['status'] }}</p>
                        </div>
                        <div class="p-4">
                            <div id="taskList-{{ $processIndex }}">
                                @foreach ($process['tasks'] as $index => $task)
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox"
                                               id="{{ $process['title'] }}-{{ $index }}"
                                               class="form-checkbox h-5 w-5 text-blue-600"
                                            {{ $process['completed'] ? 'checked' : '' }}>
                                        <label for="{{ $process['title'] }}-{{ $index }}" class="ml-2 text-sm flex-grow">
                                            {{ $task }}
                                        </label>
                                        <button onclick="removeTask({{ $processIndex }}, {{ $index }})" class="text-red-500 hover:text-red-700">
                                            ×
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-4 flex items-center">
                                <input type="text" id="newTask-{{ $processIndex }}" placeholder="追加タスクを入力" class="flex-grow p-2 border rounded-l">
                                <button onclick="addTask({{ $processIndex }})" class="bg-blue-500 text-white px-4 py-2 rounded-r hover:bg-blue-600">
                                    ＋
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- アラートカード --}}
        <div class="border rounded-lg overflow-hidden w-3/4 m-auto">
            {{-- アラートヘッダー --}}
            <div class="bg-blue-500 text-white p-4 flex justify-between items-center">
                <h3 class="text-lg font-bold">{{ $userName }}さん</h3>
                <span>現在：書類選考終了</span>
            </div>

            {{-- アラート内容 --}}
            <div class="px-6 py-12 bg-white">
                <div class="relative w-3/4 m-auto">
                    <div class="flex justify-between items-center mb-12">
                        @for ($i = 1; $i <= 6; $i++)
                            <div class="relative">
                                <div
                                    class="w-12 h-12 text-lg rounded-full flex items-center justify-center {{ $i <= $currentStep ? 'bg-teal-600 text-gray-300' : ($i == $currentStep + 1 ? 'bg-cyan-300 text-white' : 'bg-cyan-300 text-white') }}">
                                    {{ $i }}
                                </div>
                                @if ($i < 6)
                                    <div
                                        class="absolute w-full h-1 bg-{{ $i < $currentStep ? 'teal-600' : 'cyan-300' }} left-full top-1/2 -translate-y-1/2"></div>
                                @endif
                            </div>
                        @endfor
                    </div>
                    <p class="text-center text-md mb-6">次回：適正テスト</p>
                    <div class="task-box w-fit m-auto">
                        <p class="text-md mb-2">・適正評価・検討</p>
                        <p class="text-md mb-2">・通過者の振り分け</p>
                    </div>
                </div>
            </div>
        </div>
    </x-saas.main-inner>
</x-saas.outline>

<script>
    function addTask(processIndex) {
        const input = document.getElementById(`newTask-${processIndex}`);
        const taskList = document.getElementById(`taskList-${processIndex}`);
        const taskText = input.value.trim();

        if (taskText) {
            const newTaskIndex = taskList.children.length;
            const newTaskHtml = `
            <div class="flex items-center mb-2">
                <input type="checkbox"
                       id="process-${processIndex}-${newTaskIndex}"
                       class="form-checkbox h-5 w-5 text-blue-600">
                <label for="process-${processIndex}-${newTaskIndex}" class="ml-2 text-sm flex-grow">
                    ${taskText}
                </label>
                <button onclick="removeTask(${processIndex}, ${newTaskIndex})" class="text-red-500 hover:text-red-700">
                    ×
                </button>
            </div>
        `;
            taskList.insertAdjacentHTML('beforeend', newTaskHtml);
            input.value = '';
        }
    }

    function removeTask(processIndex, taskIndex) {
        const taskList = document.getElementById(`taskList-${processIndex}`);
        const taskToRemove = taskList.children[taskIndex];
        if (taskToRemove) {
            taskToRemove.remove();
        }
    }
</script>
