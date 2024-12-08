<x-stapedia.admin.outline-person>
    <x-stapedia.main-inner>
        <x-slot:title>模試登録</x-slot:title>
        <form class="space-y-12">
            <div class="bg-white py-10 px-2 sm:px-8">
                <x-stapedia.parts.input.date
                    :option="['label' => '実施日', 'required' => 'on', 'description' => '今回実施するイベントの日時を書きましょう', 'placeholder' => '年/月/日', 'name' => 'event-date', 'times' => 1]"/>

                <x-stapedia.parts.input.text
                    :option="['label' => '模試名', 'required' => 'on', 'description' => '生徒名を入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>

                <x-stapedia.parts.input.image-simple
                    :option="['label' => '模試画像', 'required' => 'on', 'description' => '生徒名を入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>

                <x-stapedia.parts.input.image-simple
                    :option="['label' => '模試画像【追加】', 'required' => 'off', 'description' => '生徒名を入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>
            </div>

            <div class="flex flex-col items-center gap-4">
                <x-stapedia.parts.button-submit/>
            </div>
        </form>
    </x-stapedia.main-inner>
</x-stapedia.admin.outline-person>
