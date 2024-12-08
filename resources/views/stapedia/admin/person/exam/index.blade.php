<x-stapedia.admin.outline-person>
    <x-stapedia.main-inner>
        <x-slot:title>模試管理</x-slot:title>
        <div class="w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            @php
                $headers = [
                    ['label' => '対象日'],
                    ['label' => '模試名'],
                    ['label' => '模試画像url'],
                    [ 'label' => '操作'],
                ];

                $contents = [
                            ['2024/10/30', '模試名','wwwwwwww', 'action_normal'],
                            ['2024/06/10', '模試名','wwwwwwww', 'action_normal'],
                ];
            @endphp
            <x-stapedia.parts.button-create :text="'新規作成'" />
            <x-stapedia.parts.table :headers="$headers" :contents="$contents"/>

            <x-saas.parts.nav></x-saas.parts.nav>
        </div>
    </x-stapedia.main-inner>
</x-stapedia.admin.outline-person>
