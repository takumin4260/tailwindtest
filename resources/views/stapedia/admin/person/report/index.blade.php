<x-stapedia.admin.outline-person>
    <x-stapedia.main-inner>
        <x-slot:title>月報管理</x-slot:title>
        <div class="w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            @php
                $headers = [
                    ['label' => '月報'],
                    ['label' => '対象月'],
                    ['label' => '作成者'],
                    [ 'label' => '操作'],
                ];

                $contents = [
                    [
                        '2021年12月月報',
                        '2021年12月',
                        '山田太郎',
                        'action_all'
                    ],
                    [
                        '2021年11月月報',
                        '2021年11月',
                        '山田太郎',
                        'action_all'
                    ],
                    [
                        '2021年10月月報',
                        '2021年10月',
                        '山田太郎',
                        'action_all'
                    ],
                    [
                        '2021年09月月報',
                        '2021年09月',
                        '山田太郎',
                        'action_all'
                    ],
                ];
            @endphp
            <x-stapedia.parts.button-create :text="'新規作成'" />
            <x-stapedia.parts.table :headers="$headers" :contents="$contents"/>

            <x-saas.parts.nav></x-saas.parts.nav>
        </div>
    </x-stapedia.main-inner>
</x-stapedia.admin.outline-person>
