<x-saas.outline>
    <x-saas.main-inner>
        <x-slot:title>求人票設定</x-slot:title>

        <!-- 生成されたペルソナの表示セクション -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold border-b-2 pb-2 mb-6">求人票生成</h2>

            <div class="space-y-6 mb-10">
                @php
                    $fields = [
                        [
                            'name' => 'job_title',
                            'label' => '募集タイトル',
                            'type' => 'text',
                            'required' => true,
                            'value' => '【リモート可/年収600万円〜】フルスタックエンジニア募集 | 次世代クラウドサービスの開発'
                        ],
                        [
                            'name' => 'job_description',
                            'label' => '仕事内容',
                            'type' => 'textarea',
                            'required' => true,
                            'value' => "当社の主力プロダクトであるクラウドベースのSaaSプラットフォームの開発に携わっていただきます。

                                主な担当業務：
                                ・新機能の設計、開発、テスト
                                ・既存機能の改善、パフォーマンス最適化
                                ・チームメンバーとの技術的な議論、コードレビュー
                                ・顧客フィードバックを基にした製品改善提案

                                開発環境：
                                ・フロントエンド：React、TypeScript
                                ・バックエンド：Node.js、Python
                                ・インフラ：AWS、Docker、Kubernetes
                                ・その他：Git、GitHub Actions、Terraform"
                        ],
                        [
                            'name' => 'requirements',
                            'label' => '応募資格',
                            'type' => 'textarea',
                            'required' => true,
                            'value' => "【必須スキル】
                                ・Webアプリケーション開発経験 3年以上
                                ・JavaScript/TypeScriptでのフロントエンド開発経験
                                ・モダンなフロントエンドフレームワーク（React/Vue.js等）の使用経験
                                ・REST APIの設計・開発経験
                                ・Git等のバージョン管理システムの使用経験

                                【歓迎スキル】
                                ・AWSなどのクラウドインフラの実務経験
                                ・CI/CDパイプラインの構築・運用経験
                                ・アジャイル開発手法での開発経験
                                ・セキュリティに関する知識・経験
                                ・OSSへのコントリビューション経験"
                        ],
                        [
                            'name' => 'desired_personality',
                            'label' => '求める人物像',
                            'type' => 'textarea',
                            'required' => true,
                            'value' => "・新しい技術への好奇心を持ち、キャッチアップを続けられる方
                                ・ユーザー視点を大切にし、より良いプロダクトを作ることに情熱を持てる方
                                ・チームでの開発を楽しみ、積極的なコミュニケーションが取れる方
                                ・問題解決能力が高く、課題に対して主体的に取り組める方
                                ・技術的な選択の理由を論理的に説明できる方
                                ・グローバルな環境で働くことに興味がある方"
                        ],
                        [
                            'name' => 'benefits',
                            'label' => '待遇・福利厚生',
                            'type' => 'textarea',
                            'required' => true,
                            'value' => "【給与】
                                ・年収600万円〜1000万円（経験・能力による）
                                ・昇給年1回（4月）、賞与年2回（6月、12月）

                                【保険】
                                ・各種社会保険完備
                                ・団体生命保険加入

                                【福利厚生】
                                ・リモートワーク手当（月額2万円）
                                ・年間休日125日
                                ・完全週休2日制（土日祝）
                                ・有給休暇（入社時10日、最大20日）
                                ・技術書籍購入支援（月額1万円まで）
                                ・セミナー・カンファレンス参加費補助
                                ・副業・兼業可（事前承認制）"
                        ],
                        [
                            'name' => 'work_conditions',
                            'label' => '勤務条件',
                            'type' => 'textarea',
                            'required' => true,
                            'value' => "【勤務形態】
                                ・フルリモート可（月1回のオフィス出社推奨）
                                ・フレックスタイム制（コアタイム 11:00-15:00）

                                【勤務時間】
                                ・実働8時間（休憩1時間）
                                ・時間外勤務 月平均10時間程度

                                【勤務地】
                                ・東京本社（渋谷区）
                                ・最寄り駅：渋谷駅 徒歩5分

                                【その他】
                                ・服装自由
                                ・副業可（事前届出制）
                                ・試用期間3ヶ月（条件変更なし）"
                        ]
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
                        @elseif ($field['type'] === 'radio')
                            @foreach ($field['options'] as $option)
                                <input type="radio" value="{{ $option }}">
                                <label for="{{ $option }}">{{ $option }}</label>
                            @endforeach
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
            <div class="space-y-6">
                <h2 class="text-xl font-semibold border-b-2 pb-2 mb-6">媒体連携</h2>

                @php
                    $fields = [
                       [
                       'name' => 'start_date',
                        'label' => '掲載開始日',
                        'type' => 'date',
                        'required' => true,
                        'value' => '',
                    ],
                    [
                        'name' => 'end_date',
                        'label' => '掲載終了日',
                        'type' => 'date',
                        'required' => true,
                        'value' => '',
                    ]];
                @endphp
                <div class="flex space-x-8 mb-10">
                    <div class="">
                        <div class="flex items-center gap-2 mb-2">
                            <label for="indeed連携"
                                   class="block text-sm font-medium text-gray-700">indeed連携</label>
                            @if ($field['required'])
                                <span
                                    class="inline-flex items-center bg-gray-700 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
                            @endif
                        </div>
                        <input type="radio" value="1">
                        <label for="連携する">連携する</label>
                        <input type="radio" value="2">
                        <label for="連携する">連携しない</label>
                    </div>

                    <button type="button"
                            class="px-6 py-3 bg-navy-800 text-white rounded-md hover:bg-navy-900 focus:outline-none focus:ring-2 focus:ring-navy-500 focus:ring-offset-2">
                        indeedプレビュー
                    </button>
                </div>
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
                        @elseif ($field['type'] === 'radio')
                            @foreach ($field['options'] as $option)
                                <input type="radio" value="{{ $option }}">
                                <label for="{{ $option }}">{{ $option }}</label>
                            @endforeach
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
                    決定
                </button>
            </div>
        </div>
    </x-saas.main-inner>
</x-saas.outline>

