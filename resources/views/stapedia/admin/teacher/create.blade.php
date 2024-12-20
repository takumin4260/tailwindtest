<x-stapedia.admin.outline>
    <x-stapedia.main-inner>
        <x-slot:title>生徒登録</x-slot:title>
        <form class="space-y-12">
            <div class="bg-white py-10 px-2 sm:px-8">
                <x-stapedia.parts.input.text
                    :option="['label' => '講師名', 'required' => 'on', 'description' => '講師名を入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>
                <x-stapedia.parts.input.text
                    :option="['label' => 'パスワード(自動発行)', 'required' => 'on', 'description' => '保護者メールアドレスを入力しましょう', 'placeholder' => '', 'name' => 'capacity']"/>
                <x-stapedia.parts.input.text
                    :option="['label' => 'メールアドレス', 'required' => 'on', 'description' => 'メールアドレスを入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>
            </div>

            <div class="flex flex-col items-center gap-4">
                <x-stapedia.parts.button-submit/>
            </div>
        </form>
    </x-stapedia.main-inner>
</x-stapedia.admin.outline>
