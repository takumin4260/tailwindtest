<x-stapedia.user.outline>
    <x-stapedia.main-inner>
        <x-slot:title>教材マスタ管理</x-slot:title>
        @php
            $searchFields = [
                [
                    [
                        'type' => 'text',
                        'name' => 'title',
                        'label' => '教材名',
                        'placeholder' => '教材名を入力'
                    ],
                ],
                [
                    [
                        'type' => 'select',
                        'name' => 'status',
                        'label' => '教科',
                        'options' => [
                            ['value' => 'all', 'label' => 'すべて'],
                            ['value' => 'sent', 'label' => '送信済み'],
                            ['value' => 'pending', 'label' => '送信待ち'],
                            ['value' => 'failed', 'label' => '送信失敗']
                        ]
                    ],
                ]
            ];
        @endphp

        <x-stapedia.parts.search :fields="$searchFields"/>
        <div class="w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            @php
                $headers = [
                    ['label' => '教材名'],
                    ['label' => '教科'],
                    ['label' => '教材単位'],
                    ['label' => '量'],
                    [ 'label' => '操作'],
                ];

                $contents = [
                    [
                        '教材A',
                        '国語',
                        'ページ',
                        '400',
                        'action_normal',
                       ],
                    [
                        '教材B',
                        '数学',
                        '問題',
                        '50',
                        'action_normal',
                       ],
                    [
                        '単語帳',
                        '英語',
                        '単語',
                        '500',
                        'action_normal',
                       ],
                ];
            @endphp
            <x-stapedia.parts.table :headers="$headers" :contents="$contents"/>

            <x-saas.parts.nav></x-saas.parts.nav>
        </div>
    </x-stapedia.main-inner>
</x-stapedia.user.outline>
