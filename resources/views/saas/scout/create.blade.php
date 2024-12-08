<x-saas.outline>
    <x-saas.main-inner>
        <x-slot:title>スカウト設定</x-slot:title>

        <!-- ウィザード形式のセクション -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-semibold border-b-2 pb-2 mb-6">スカウト生成</h2>

            <!-- 会話のやり取り -->
            <div class="space-y-4 mb-6">
                <div class="flex justify-start">
                    <div class=" bg-green-50 text-gray-800 p-3 rounded-lg shadow-md max-w-md">
                        未定未定未定未定未定未定
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="bg-white text-gray-800 p-3 rounded-lg shadow-md max-w-md">
                        未定未定未定未定未定未定
                    </div>
                </div>
                <div class="flex justify-start">
                    <div class=" bg-green-50 text-gray-800 p-3 rounded-lg shadow-md max-w-md">
                        未定未定未定未定未定未定
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="bg-white text-gray-800 p-3 rounded-lg shadow-md max-w-md">
                        未定未定未定未定未定未定
                    </div>
                </div>
            </div>

            <!-- 会話の入力欄 -->
            <div class="mb-4">
                <label for="user-input" class="block text-sm font-medium text-gray-700 mb-2">あなたの回答</label>
                <textarea id="user-input" name="user-input" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm border focus:border-green-500 focus:ring-green-500"></textarea>
            </div>
            <!-- 送信 -->
            <div class="flex justify-end space-x-4 mb-20">
                <button type="button" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                    送信
                </button>
            </div>

            <!-- ボタン -->
            <div class="flex justify-center space-x-4">
                <button type="button" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                    出力
                </button>
                <button type="button" class="px-4 py-2 bg-navy-800 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    続ける
                </button>
            </div>
        </div>

        <!-- 生成されたペルソナの表示セクション -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">生成されたペルソナ</h2>

            <div class="space-y-6">
                @php
                    $fields = [
                        ['name' => 'persona_name', 'label' => 'ペルソナ設定名', 'type' => 'text', 'required' => true, 'value' => "ITエンジニア募集"],
                        ['name' => 'work_type', 'label' => '職種', 'type' => 'text', 'required' => true, 'value' => "UIデザイナー"],
                        ['name' => 'required_skills', 'label' => '求める経験・スキル', 'type' => 'textarea', 'required' => true, 'value' => "スカウト文が入る。スカウト文が入る。スカウト文が入る。スカウト文が入る。スカウト文が入る。スカウト文が入る。スカウト文が入る。スカウト文が入る。"],
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
                        @if ($field['type'] === 'textarea')
                            <textarea
                                id="{{ $field['name'] }}"
                                name="{{ $field['name'] }}"
                                rows="4"
                                class="block w-full rounded-md border-gray-300 border focus:border-green-500 focus:ring-green-500 sm:text-sm py-2 px-3"
                        {{ $field['required'] ? 'required' : '' }}
                    >{{ $field['value'] }}</textarea>
                        @else
                            <input
                                type="{{ $field['type'] }}"
                                id="{{ $field['name'] }}"
                                name="{{ $field['name'] }}"
                                value="{{ $field['value'] }}"
                                class="block w-full rounded-md border-gray-300 border focus:border-green-500 focus:ring-green-500 sm:text-sm py-2 px-3"
                                {{ $field['required'] ? 'required' : '' }}
                            >
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="mt-8 flex justify-center gap-8">
                <button type="button" class="px-6 py-3 bg-navy-800 text-white rounded-md hover:bg-navy-900 focus:outline-none focus:ring-2 focus:ring-navy-500 focus:ring-offset-2">
                    登録
                </button>
                <button type="button" class="px-6 py-3 bg-navy-800 text-white rounded-md hover:bg-navy-900 focus:outline-none focus:ring-2 focus:ring-navy-500 focus:ring-offset-2">
                    求人票の生成
                </button>
            </div>
        </div>
    </x-saas.main-inner>
</x-saas.outline>
<!-- モーダルのHTML -->
<div id="confirmModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg p-6 max-w-md w-full mx-4">
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-900">求人票の生成確認</h3>
            <p class="text-gray-600 mt-2">現在のペルソナで求人票を生成しますがよろしいでしょうか。</p>
        </div>
        <div class="flex justify-end space-x-4">
            <button
                id="cancelBtn"
                class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
            >
                キャンセル
            </button>
            <button
                id="confirmBtn"
                class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
            >
                生成する
            </button>
        </div>
    </div>
</div>

<script>
    // モーダル関連の要素を取得
    const modal = document.getElementById('confirmModal');
    const generateBtn = Array.from(document.querySelectorAll('button')).find(
        button => button.textContent.trim() === '求人票の生成'
    );
    const cancelBtn = document.getElementById('cancelBtn');
    const confirmBtn = document.getElementById('confirmBtn');

    // モーダルを表示する関数
    function showModal() {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    // モーダルを非表示にする関数
    function hideModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    // 求人票生成処理の関数
    function handleGenerateJobPosting() {
        // TODO: ここに求人票生成の処理を追加
        console.log('求人票を生成します');
        hideModal();
    }

    // イベントリスナーの設定
    if (generateBtn) {
        generateBtn.addEventListener('click', showModal);
    }

    if (cancelBtn) {
        cancelBtn.addEventListener('click', hideModal);
    }

    if (confirmBtn) {
        confirmBtn.addEventListener('click', handleGenerateJobPosting);
    }

    // モーダルの外側をクリックした時にモーダルを閉じる
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            hideModal();
        }
    });

    // ESCキーでモーダルを閉じる
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            hideModal();
        }
    });
</script>
