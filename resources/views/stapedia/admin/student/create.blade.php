<x-stapedia.admin.outline>
    <x-stapedia.main-inner>
        <x-slot:title>生徒登録</x-slot:title>
        <form class="space-y-12">
            <div class="bg-white py-10 px-2 sm:px-8">
                <x-stapedia.parts.input.text
                    :option="['label' => '生徒名', 'required' => 'on', 'description' => '生徒名を入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>
                <x-stapedia.parts.input.text
                    :option="['label' => 'パスワード(自動発行)', 'required' => 'on', 'description' => '保護者メールアドレスを入力しましょう', 'placeholder' => '', 'name' => 'capacity']"/>
                <x-stapedia.parts.input.select
                    :option="[
                        'label' => '担当講師',
                        'required' => 'on',
                        'description' => '担当する講師を選択しましょう',
                        'name' => 'subject',
                        'choices' => [
                            ['value' => '', 'label' => '選択してください'],
                            ['value' => '1', 'label' => '山田タロウ'],
                        ]
                ]"/>
                <x-stapedia.parts.input.select
                    :option="[
                        'label' => '学年',
                        'required' => 'on',
                        'description' => '',
                        'name' => 'subject',
                        'choices' => [
                            ['value' => '', 'label' => '選択してください'],
                            ['value' => 'japanese', 'label' => '1年'],
                            ['value' => 'math', 'label' => '2年'],
                            ['value' => 'social', 'label' => '3年'],
                        ]
                ]"/>

                <x-stapedia.parts.input.text
                    :option="['label' => 'メールアドレス', 'required' => 'on', 'description' => 'メールアドレスを入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>
                <x-stapedia.parts.input.text
                    :option="['label' => '保護者メールアドレス', 'required' => 'on', 'description' => '保護者メールアドレスを入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>
                <x-stapedia.parts.input.text
                    :option="['label' => '所属高校', 'required' => 'on', 'description' => '高校名を入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>
                <x-stapedia.parts.input.text
                    :option="['label' => '志望大学', 'required' => 'on', 'description' => '第一志望の大学名を入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>
            </div>

            <div class="flex flex-col items-center gap-4">
                <x-stapedia.parts.button-submit/>
            </div>
        </form>
    </x-stapedia.main-inner>
</x-stapedia.admin.outline>
