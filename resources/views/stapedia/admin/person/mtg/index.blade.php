<x-stapedia.admin.outline-person>
    <x-stapedia.main-inner>
        <x-slot:title>週次mtg管理</x-slot:title>
        <div class="w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            @php
                $headers = [
                    ['label' => '作成日'],
                    ['label' => '作成者'],
                    ['label' => '議事録url'],
                    [ 'label' => '操作'],
                ];

                $contents = [
                            ['10/30', '山田タロウ','wwwwwwww', 'action_normal'],
                            ['10/31', '山田タロウ','wwwwwwww', 'action_normal'],
                            ['11/1', '山田タロウ','wwwwwwww', 'action_normal'],
                ];
            @endphp
            <x-stapedia.parts.button-create :text="'新規作成'" />
            <x-stapedia.parts.table :headers="$headers" :contents="$contents"/>

            <x-saas.parts.nav></x-saas.parts.nav>
        </div>
    </x-stapedia.main-inner>
</x-stapedia.admin.outline-person>
