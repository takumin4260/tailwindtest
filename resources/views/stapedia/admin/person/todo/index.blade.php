<x-stapedia.admin.outline-person>
    <x-stapedia.main-inner>
        <x-slot:title>todo管理</x-slot:title>
        <div class="w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            @php
                $headers = [
                    ['label' => '作成日'],
                    ['label' => '作成者'],
                    ['label' => '生徒進捗（%）'],
                    [ 'label' => '操作'],
                ];

                $contents = [
                            ['10/30', '事務A', '70%', 'action_normal'],
                            ['10/31', '事務B', '85%', 'action_normal'],
                            ['11/1', '事務C', '50%', 'action_normal'],
                            ['11/2', '事務A', '90%', 'action_normal'],
                            ['11/3', '事務D', '40%', 'action_normal'],
                            ['11/4', '事務E', '60%', 'action_normal'],
                            ['11/5', '事務B', '75%', 'action_normal'],
                            ['11/6', '事務C', '55%', 'action_normal'],
                            ['11/7', '事務D', '80%', 'action_normal'],
                            ['11/8', '事務A', '95%', 'action_normal'],
                            ['11/9', '事務E', '65%', 'action_normal'],
                            ['11/10', '事務B', '85%', 'action_normal'],
                            ['11/11', '事務C', '45%', 'action_normal'],
                            ['11/12', '事務D', '70%', 'action_normal'],
                            ['11/13', '事務A', '100%', 'action_normal'],
                ];
            @endphp
            <x-stapedia.parts.button-create :text="'新規登録'" />
            <x-stapedia.parts.table :headers="$headers" :contents="$contents"/>

            <x-saas.parts.nav></x-saas.parts.nav>
        </div>
    </x-stapedia.main-inner>
</x-stapedia.admin.outline-person>
