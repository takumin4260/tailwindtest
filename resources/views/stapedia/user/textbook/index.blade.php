<x-stapedia.user.outline>
    <x-stapedia.main-inner>
        <x-slot:title>教材一覧</x-slot:title>
        @php
            $searchFields = [
                [
                    [
                        'type' => 'text',
                        'name' => 'title',
                        'label' => '教材名',
                        'placeholder' => '教材名を入力'
                    ],
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
                    [
                        'type' => 'select',
                        'name' => 'status',
                        'label' => 'ステータス',
                        'options' => [
                            ['value' => 'all', 'label' => 'すべて'],
                            ['value' => 'sent', 'label' => '送信済み'],
                            ['value' => 'pending', 'label' => '送信待ち'],
                            ['value' => 'failed', 'label' => '送信失敗']
                        ]
                    ]
                ],
                [
                    [
                        'type' => 'date-range',
                        'name' => 'start_date',
                        'label' => '着手日'
                    ],
                    [
                        'type' => 'date-range',
                        'name' => 'end_date',
                        'label' => '修了予定日'
                    ]
                ]
            ];
        @endphp

        <x-stapedia.parts.search :fields="$searchFields"/>
        <div class="w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            @php
                $headers = [
                    ['label' => '教材名'],
                    ['label' => '教科'],
                    ['label' => '着手日'],
                    ['label' => '終了予定日'],
                    ['label' => 'ステータス'],
                    [ 'label' => '操作'],
                ];

                $contents = [
                    [
                        '教材A',
                        '国語',
                        '2021/10/01',
                        '2021/10/31',
                        '進行中',
                        'action_check',
                       ],
                    [
                        '教材B',
                        '数学',
                        '2021/10/01',
                        '2021/10/31',
                        '終了',
                        'action_check',
                        ]
                ];
            @endphp
            <x-stapedia.parts.table :headers="$headers" :contents="$contents"/>

            <x-saas.parts.nav></x-saas.parts.nav>
        </div>
    </x-stapedia.main-inner>
</x-stapedia.user.outline>
