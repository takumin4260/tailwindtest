<x-saas.outline>
    <x-saas.main-inner>
        <x-slot:title>ペルソナ編集</x-slot:title>

        <!-- 生成されたペルソナの表示セクション -->
        <div class="bg-white rounded-lg shadow-md p-6">

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
                <a href="<?= route('saas.persona.index') ?>">
                <button type="button" class="px-6 py-3 bg-navy-800 text-white rounded-md hover:bg-navy-900 focus:outline-none focus:ring-2 focus:ring-navy-500 focus:ring-offset-2">
                    更新
                </button>
                </a>
            </div>
        </div>
    </x-saas.main-inner>
</x-saas.outline>
