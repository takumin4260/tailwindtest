<x-stapedia.user.outline>
    <x-stapedia.main-inner>
        <x-slot:title>今日の進捗入力</x-slot:title>
        <form class="space-y-12">
            <div class="bg-white py-10 px-2 sm:px-8">
                <h1 class="text-lg font-semibold text-black mb-4">教材A</h1>
                <!-- 定員人数 -->
                <x-stapedia.parts.input.text
                    :option="['label' => '進めたページ数', 'required' => 'on', 'description' => '今日進めたページ数を入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>

                <h1 class="text-lg font-semibold text-black mb-4">教材B</h1>
                <!-- 定員人数 -->
                <x-stapedia.parts.input.text
                    :option="['label' => '進めた単語数', 'required' => 'on', 'description' => '今日進めたページ数を入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>

                <h1 class="text-lg font-semibold text-black mb-4">教材C</h1>
                <!-- 定員人数 -->
                <x-stapedia.parts.input.text
                    :option="['label' => '進めた問題数', 'required' => 'on', 'description' => '今日進めたページ数を入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>

            </div>

            <div class="flex flex-col items-center gap-4">
                <x-stapedia.parts.button-submit/>
            </div>
        </form>
    </x-stapedia.main-inner>
</x-stapedia.user.outline>
