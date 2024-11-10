<x-saas.outline>
    <x-saas.main-inner>
        <x-slot:title>ペルソナ設定</x-slot:title>

        <!-- ウィザード形式のセクション -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4 border-b-2 pb-2 mb-6">ペルソナ生成</h2>

            <!-- 会話のやり取り -->
            <div class="space-y-4 mb-6">
                <div class="flex justify-start">
                    <div class=" bg-green-50 text-gray-800 p-3 rounded-lg shadow-md max-w-md">
                        どのような人材を探していますか？
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="bg-white text-gray-800 p-3 rounded-lg shadow-md max-w-md">
                        経験豊富なフルスタックエンジニアを探しています。
                    </div>
                </div>
                <div class="flex justify-start">
                    <div class=" bg-green-50 text-gray-800 p-3 rounded-lg shadow-md max-w-md">
                        具体的にどのようなスキルが必要ですか？
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="bg-white text-gray-800 p-3 rounded-lg shadow-md max-w-md">
                        React、Node.js、AWSの経験が3年以上ある方を希望します。
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
                        ['name' => 'required_skills', 'label' => '求める経験・スキル', 'type' => 'textarea', 'required' => true, 'value' => "React、Node.js、AWSの経験が3年以上\nフルスタック開発の実務経験\nアジャイル開発手法の理解と経験"],
                        ['name' => 'desired_personality', 'label' => '求める人物像', 'type' => 'textarea', 'required' => true, 'value' => "チームワークを重視し、新しい技術に対する学習意欲が高く、問題解決能力に優れた人材。コミュニケーション能力が高く、顧客との対話も円滑に行える方。"],
                        ['name' => 'work_environment', 'label' => '職場環境・企業文化', 'type' => 'textarea', 'required' => true, 'value' => "フラットな組織構造で、アイデアを自由に提案できる環境。リモートワークと柔軟な勤務時間を採用。継続的な学習と成長を支援する文化があります。"],
                        ['name' => 'salary_benefits', 'label' => '給与・待遇条件', 'type' => 'textarea', 'required' => true, 'value' => "経験・スキルに応じて年収600万円〜1000万円。昇給・賞与あり。社会保険完備、交通費支給、書籍購入支援、カンファレンス参加支援あり。"],
                    ];
                @endphp

                @foreach ($fields as $field)
                    <div class="mb-10">
                        <div class="flex items-center gap-2 mb-2">
                            <label for="{{ $field['name'] }}" class="block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
                            @if ($field['required'])
                                <span class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
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

            <div class="mt-8 flex justify-center">
                <button type="button" class="px-6 py-3 bg-navy-800 text-white rounded-md hover:bg-navy-900 focus:outline-none focus:ring-2 focus:ring-navy-500 focus:ring-offset-2">
                    確定
                </button>
            </div>
        </div>
    </x-saas.main-inner>
</x-saas.outline>
