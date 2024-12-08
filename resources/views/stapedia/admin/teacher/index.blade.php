<x-stapedia.admin.outline>
    <x-stapedia.main-inner>
        <x-slot:wFull>on</x-slot:wFull>
        <x-slot:title>講師一覧</x-slot:title>
        @php
            $searchFields = [
                [
                    [
                        'type' => 'text',
                        'name' => 'title',
                        'label' => '講師名',
                        'placeholder' => '講師名を入力'
                    ]
                ],
                [
                    [
                        'type' => 'text',
                        'name' => 'email',
                        'label' => 'メールアドレス',
                        'placeholder' => 'メールアドレスを入力'
                    ]
                ]
            ];
        @endphp

        <x-stapedia.parts.search :fields="$searchFields"/>
        <div class="w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            @php
                $headers = [
                    ['label' => '講師氏名'],
                    ['label' => 'メールアドレス'],
                    ['label' => '操作'],
                ];

                $contents = [
                    [
                        "田中太郎",
                        "test@test.com",
                        "action_normal",
                        ],
                        [
                        "山田花子",
                        "test@test.com",
                        "action_normal",
                        ],
                        [
                        "佐藤次郎",
                        "test@test.com",
                        "action_normal",
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
