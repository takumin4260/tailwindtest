<x-stapedia.admin.outline>
    <x-stapedia.main-inner>
        <x-slot:title>教材追加</x-slot:title>
        <form class="space-y-12">
            <div class="bg-white py-10 px-2 sm:px-8">
                <x-stapedia.parts.input.text
                    :option="['label' => '教材名', 'required' => 'on', 'description' => '教材名を入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>
                <x-stapedia.parts.input.select
                    :option="[
                        'label' => '教科',
                        'required' => 'on',
                        'description' => '教科を選択しましょう',
                        'name' => 'subject',
                        'choices' => [
                            ['value' => '', 'label' => '選択してください'],
                            ['value' => 'japanese', 'label' => '国語'],
                            ['value' => 'math', 'label' => '数学'],
                            ['value' => 'social', 'label' => '社会'],
                            ['value' => 'science', 'label' => '理科'],
                            ['value' => 'english', 'label' => '英語']
                        ]
                ]"/>

                <x-stapedia.parts.input.select
                    :option="[
                        'label' => '単位',
                        'required' => 'on',
                        'description' => '教材の単位を選択しましょう',
                        'name' => 'subject',
                        'choices' => [
                            ['value' => '', 'label' => '選択してください'],
                            ['value' => 'japanese', 'label' => 'ページ'],
                            ['value' => 'math', 'label' => '問'],
                            ['value' => 'social', 'label' => '単語'],
                        ]
                ]"/>

                <x-stapedia.parts.input.text
                    :option="['label' => '全体の量', 'required' => 'on', 'description' => '教材の全体の量を入力しましょう（〇〇ページなど）', 'placeholder' => '入力はこちら', 'name' => 'capacity', 'isLast' => 'on']"/>


            </div>

            <div class="flex flex-col items-center gap-4">
                <x-stapedia.parts.button-submit/>
            </div>
        </form>
    </x-stapedia.main-inner>
</x-stapedia.admin.outline>
