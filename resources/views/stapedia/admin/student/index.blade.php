<x-stapedia.admin.outline>
    <x-stapedia.main-inner>
        <x-slot:wFull>on</x-slot:wFull>
        <x-slot:title>生徒一覧</x-slot:title>
        @php
            $searchFields = [
                [
                    [
                        'type' => 'text',
                        'name' => 'title',
                        'label' => '生徒名',
                        'placeholder' => '生徒名を入力'
                    ],
                    [
                        'type' => 'select',
                        'name' => 'status',
                        'label' => '学年',
                        'options' => [
                            ['value' => 'all', 'label' => '1年'],
                            ['value' => 'all', 'label' => '2年'],
                            ['value' => 'all', 'label' => '3年'],
                            ['value' => 'all', 'label' => '浪人生'],

                        ]
                    ]
                ],
                [
                    [
                        'type' => 'select',
                        'name' => 'status',
                        'label' => '担当講師名',
                        'options' => [
                            ['value' => 'all', 'label' => '田中タロウ'],
                            ['value' => 'all', 'label' => '山田花子'],
                            ['value' => 'all', 'label' => '佐藤次郎'],
                            ['value' => 'all', 'label' => '鈴木三郎'],

                        ]
                    ]
                ]
            ];
        @endphp

        <x-stapedia.parts.search :fields="$searchFields"/>
        <div class="w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            @php
                $headers = [
                    ['label' => '生徒氏名'],
                    ['label' => 'メールアドレス'],
                    ['label' => '学年'],
                    ['label' => '担当講師'],
                    ['label' => '操作'],
                    [ 'label' => '管理'],
                ];

                $contents = [
                    [
                        "田中太郎",
                        "test@test.com",
                        "1年",
                        "田中タロウ",
                        "todo_check",
                        "student_check"
                        ],
                        [
                        "山田花子",
                        "test@test.com",
                        "2年",
                        "講師A",
                        "todo_check",
                        "student_check"
                        ],
                        [
                        "佐藤次郎",
                        "test@test.com",
                        "3年",
                        "講師A",
                        "todo_check",
                        "student_check"
                        ],
                ];
            @endphp
                <!-- 新規作成ボタン -->
            <x-stapedia.parts.button-create :text="'新規登録'" />
            <x-stapedia.parts.table :headers="$headers" :contents="$contents"/>
            <x-saas.parts.nav></x-saas.parts.nav>
        </div>
    </x-stapedia.main-inner>
</x-stapedia.admin.outline>
