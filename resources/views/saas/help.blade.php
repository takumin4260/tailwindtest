<x-saas.outline>
    <x-saas.main-inner>
        <x-slot:title>ヘルプ</x-slot:title>

        <!-- ウィザード形式のセクション -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-semibold border-b-2 pb-2 mb-6">使い方マニュアル</h2>
                <div class="mb-10">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="block text-md font-bold">流れ</div>
                    </div>
                    <div
                        class="block w-full rounded-md border-gray-300 focus:ring-green-500 sm:text-sm py-4 px-3">
                        流れについての説明を画像も入れながら説明
                    </div>
                </div>

            <div class="flex items-center justify-center gap-20">
                <button
                    type="submit"
                    name="action"
                    value="save"
                    class="w-fit max-w-xs bg-navy-800 text-white rounded-sm px-10 py-3 text-sm font-medium hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                >
                    問い合わせ
                </button>
            </div>
        </div>
    </x-saas.main-inner>
</x-saas.outline>
