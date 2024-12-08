<x-stapedia.admin.outline-person>
    <x-stapedia.main-inner>
        <x-slot:title>教材割り振り管理</x-slot:title>
        @php
            $searchFields = [
                [
                    [
                        'type' => 'date-range',
                        'name' => 'start_date',
                        'label' => '対象日'
                    ]
                ]
            ];
        @endphp

        <x-stapedia.parts.search :fields="$searchFields"/>
        <div class="w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            @php
                $headers = [
                    ['label' => '対象日'],
                    [ 'label' => '操作'],
                ];

                $contents = [
                    [
                        '2021/10/31',
                        'action_all',
                       ],
                    [
                        '2021/10/30',
                        'action_all',
                       ],
                ];
            @endphp
            <x-stapedia.parts.button-create :text="'新規作成'" />
            <x-stapedia.parts.table :headers="$headers" :contents="$contents"/>

            <x-saas.parts.nav></x-saas.parts.nav>
        </div>
    </x-stapedia.main-inner>
</x-stapedia.admin.outline-person>
