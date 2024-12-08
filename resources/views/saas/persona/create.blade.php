<x-saas.outline>
    <x-saas.main-inner>
        <x-slot:title>ペルソナ生成</x-slot:title>

        <!-- 生成されたペルソナの表示セクション -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-20">
            <h2 class="text-xl font-semibold mb-4">ペルソナ生成時の入力項目</h2>

            <h3 class="text-lg font-semibold mb-4">社会的特徴</h3>

            <div class="space-y-6　mb-10">
                @php
                    $fields = [
                        ['name' => 'persona_name', 'label' => '年齢', 'type' => 'text', 'required' => true, 'value' => ""],
                        ['name' => 'work_type', 'label' => '性別', 'type' => 'text', 'required' => true, 'value' => ""],
                        ['name' => 'required_skills', 'label' => '家族構成', 'type' => 'text', 'required' => true, 'value' => ""],
                        ['name' => 'desired_personality', 'label' => '所得', 'type' => 'text', 'required' => true, 'value' => ""],
                        ['name' => 'work_environment', 'label' => '学歴・職歴', 'type' => 'text', 'required' => true, 'value' => ""],
                    ];
                @endphp

                @foreach ($fields as $field)
                    <div class="mb-10">
                        <div class="flex items-center gap-2 mb-2">
                            <label for="{{ $field['name'] }}"
                                   class="block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
                            @if ($field['required'])
                                <span
                                    class="inline-flex items-center bg-gray-700 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
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

            <h3 class="text-lg font-semibold mb-4">会社的特徴</h3>

            <div class="space-y-6 mb-10">
                @php
                    $fields = [
                        ['name' => 'persona_name', 'label' => '業種', 'type' => 'text', 'required' => true, 'value' => ""],
                        ['name' => 'work_type', 'label' => '職種', 'type' => 'text', 'required' => true, 'value' => ""],
                        ['name' => 'required_skills', 'label' => '地域', 'type' => 'text', 'required' => true, 'value' => ""],
                        ['name' => 'desired_personality', 'label' => 'チーム人数', 'type' => 'text', 'required' => true, 'value' => ""],
                    ];
                @endphp

                @foreach ($fields as $field)
                    <div class="mb-10">
                        <div class="flex items-center gap-2 mb-2">
                            <label for="{{ $field['name'] }}"
                                   class="block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
                            @if ($field['required'])
                                <span
                                    class="inline-flex items-center bg-gray-700 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
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

            <h3 class="text-lg font-semibold mb-4">心理的特徴</h3>

            <div class="space-y-6 mb-10">
                @php
                    $fields = [
                        ['name' => 'persona_name', 'label' => 'ライフスタイル', 'type' => 'textarea', 'required' => true, 'value' => ""],
                        ['name' => 'work_type', 'label' => 'パーソナリティ', 'type' => 'textarea', 'required' => true, 'value' => ""],
                        ['name' => 'required_skills', 'label' => '仕事で大切にしていること', 'type' => 'textarea', 'required' => true, 'value' => ""],
                    ];
                @endphp

                @foreach ($fields as $field)
                    <div class="mb-10">
                        <div class="flex items-center gap-2 mb-2">
                            <label for="{{ $field['name'] }}"
                                   class="block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
                            @if ($field['required'])
                                <span
                                    class="inline-flex items-center bg-gray-700 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
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
                <button type="button"
                        class="px-6 py-3 bg-navy-800 text-white rounded-md hover:bg-navy-900 focus:outline-none focus:ring-2 focus:ring-navy-500 focus:ring-offset-2">
                    出力
                </button>
            </div>
        </div>
        <!-- モーダルのHTML -->
        <div id="alertModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
            <div class="bg-white rounded-lg p-6 max-w-md w-full mx-4">
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">ペルソナ生成条件の確認</h3>
                    <p class="text-gray-600 mt-2">
                        入力された条件は、一般的な市場相場と比較して以下の特徴があります：<br>
                        <br>
                        - 求める経験・スキルが高度である<br>
                        - 給与水準が市場平均を下回っている<br>
                        - 勤務地や労働条件に制約がある<br>
                        <br>
                        応募率に影響を与える可能性がありますが、このまま進めてよろしいですか？
                    </p>
                </div>
                <div class="flex justify-end space-x-4">
                    <button
                        id="cancelBtn"
                        class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
                    >
                        条件を見直す
                    </button>
                    <button
                        id="confirmBtn"
                        class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
                    >
                        このまま進める
                    </button>
                </div>
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
                        ['name' => 'required_skills', 'label' => '求める経験・スキル', 'type' => 'textarea', 'required' => true, 'value' => "React、Node.js、AWSの経験が3年以上\nフルスタック開発の実務経験\nアジャイル開発手法の理解と経験"],
                        ['name' => 'desired_personality', 'label' => '求める人物像', 'type' => 'textarea', 'required' => true, 'value' => "チームワークを重視し、新しい技術に対する学習意欲が高く、問題解決能力に優れた人材。コミュニケーション能力が高く、顧客との対話も円滑に行える方。"],
                        ['name' => 'work_environment', 'label' => '求める職場環境・企業文化', 'type' => 'textarea', 'required' => true, 'value' => "フラットな組織構造で、アイデアを自由に提案できる環境。リモートワークと柔軟な勤務時間を採用。継続的な学習と成長を支援する文化があります。"],
                        ['name' => 'salary_benefits', 'label' => '給与・待遇条件', 'type' => 'textarea', 'required' => true, 'value' => "経験・スキルに応じて年収600万円〜1000万円。昇給・賞与あり。社会保険完備、交通費支給、書籍購入支援、カンファレンス参加支援あり。"],
                    ];
                @endphp

                @foreach ($fields as $field)
                    <div class="mb-10">
                        <div class="flex items-center gap-2 mb-2">
                            <label for="{{ $field['name'] }}"
                                   class="block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
                            @if ($field['required'])
                                <span
                                    class="inline-flex items-center bg-gray-700 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
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
                <button type="button"
                        class="px-6 py-3 bg-navy-800 text-white rounded-md hover:bg-navy-900 focus:outline-none focus:ring-2 focus:ring-navy-500 focus:ring-offset-2">
                    登録
                </button>
                <button type="button"
                        class="px-6 py-3 bg-navy-800 text-white rounded-md hover:bg-navy-900 focus:outline-none focus:ring-2 focus:ring-navy-500 focus:ring-offset-2">
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
    const confirmModal = document.getElementById('confirmModal');
    const alertModal = document.getElementById('alertModal');
    const generateBtn = Array.from(document.querySelectorAll('button')).find(
        button => button.textContent.trim() === '求人票の生成'
    );
    const outputBtn = Array.from(document.querySelectorAll('button')).find(
        button => button.textContent.trim() === '出力'
    );
    const cancelBtns = document.querySelectorAll('#cancelBtn');
    const confirmBtns = document.querySelectorAll('#confirmBtn');

    // モーダルを表示する関数
    function showModal(modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    // モーダルを非表示にする関数
    function hideModal(modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    // 求人票生成処理の関数
    function handleGenerateJobPosting() {
        // TODO: ここに求人票生成の処理を追加
        console.log('求人票を生成します');
        hideModal(confirmModal);
    }

    // ペルソナ出力処理の関数
    function handlePersonaOutput() {
        // TODO: ここにペルソナ出力の処理を追加
        console.log('ペルソナを出力します');
        hideModal(alertModal);
    }

    // イベントリスナーの設定
    if (generateBtn) {
        generateBtn.addEventListener('click', () => showModal(confirmModal));
    }

    if (outputBtn) {
        outputBtn.addEventListener('click', () => showModal(alertModal));
    }

    // Cancel ボタンのイベントリスナー設定
    cancelBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const parentModal = btn.closest('#confirmModal, #alertModal');
            if (parentModal) {
                hideModal(parentModal);
            }
        });
    });

    // Confirm ボタンのイベントリスナー設定
    confirmBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const parentModal = btn.closest('#confirmModal, #alertModal');
            if (parentModal.id === 'confirmModal') {
                handleGenerateJobPosting();
            } else if (parentModal.id === 'alertModal') {
                handlePersonaOutput();
            }
        });
    });

    // モーダルの外側をクリックした時にモーダルを閉じる
    [confirmModal, alertModal].forEach(modal => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                hideModal(modal);
            }
        });
    });

    // ESCキーでモーダルを閉じる
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            [confirmModal, alertModal].forEach(modal => {
                if (!modal.classList.contains('hidden')) {
                    hideModal(modal);
                }
            });
        }
    });
</script>
