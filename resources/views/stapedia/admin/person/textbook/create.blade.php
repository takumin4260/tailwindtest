<x-stapedia.admin.outline-person>
    <x-stapedia.main-inner>
        <x-slot:title>教材割り振り登録</x-slot:title>
        <form class="space-y-12">
            <div class="bg-white py-10 px-2 sm:px-8">
                <x-stapedia.parts.input.select
                    :option="[
                        'label' => '教材',
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
                        'label' => '教科',
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

                <x-stapedia.parts.input.date
                    :option="['label' => '着手日', 'required' => 'on', 'description' => '今回実施するイベントの日時を書きましょう', 'placeholder' => '年/月/日', 'name' => 'event-date', 'times' => 1]"/>

                <x-stapedia.parts.input.date
                    :option="['label' => '修了目標日', 'required' => 'on', 'description' => '今回実施するイベントの日時を書きましょう', 'placeholder' => '年/月/日', 'name' => 'event-date', 'times' => 1]"/>

                <x-stapedia.parts.input.ratio :option="[
                    'label' => '比率',
                    'required' => 'on',
                    'description' => '平日と休日の勉強量の比率を入力してください。',
                    'name' => 'time',
                    'placeholder' => '5',
                    'isLast' => 'off'
                ]" :isDisc="'on'"/>

                <div class="mb-4">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" id="toggleOption" class="mr-2">
                        <span class="text-gray-700">追加オプションを表示</span>
                    </label>
                </div>

                <div id="optionContent" class="option hidden">
                    <x-stapedia.parts.input.text
                        :option="['label' => '追加テキスト', 'required' => 'on', 'description' => '教材の補足テキストを入力してください。', 'placeholder' => '入力はこちら', 'name' => 'capacity', 'isLast' => 'on']" :isDisc="'on'"/>
                    <x-stapedia.parts.input.number
                        :option="['label' => '教材の量', 'required' => 'on', 'description' => '対象の教材の中で、実際に使用する範囲を入力してください。', 'placeholder' => '入力はこちら', 'name' => 'capacity', 'isLast' => 'on']" :isDisc="'on'"/>
                </div>
            </div>

            <div class="flex flex-col items-center gap-4">
                <x-stapedia.parts.button-submit/>
            </div>
        </form>
    </x-stapedia.main-inner>
</x-stapedia.admin.outline-person>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.getElementById('toggleOption');
        const optionContent = document.getElementById('optionContent');

        checkbox.addEventListener('change', function() {
            if (this.checked) {
                optionContent.classList.remove('hidden');
            } else {
                optionContent.classList.add('hidden');
            }
        });
    });
</script>
