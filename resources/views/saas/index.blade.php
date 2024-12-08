<x-saas.outline>
    <x-saas.main-inner>
        <x-slot:title>TOP</x-slot:title>

        <!-- ウィザード形式のセクション -->
        <div class="rounded-lg p-6 mb-8">
                <div class="mb-10">
                    <div class="flex items-center justify-center gap-2 mb-2">
                        <div class="block text-7xl font-bold" style="font-size: 5rem">Saas</div>
                    </div>
                    <div
                        class="block w-full text-center rounded-md border-gray-300 focus:ring-green-500 sm:text-sm py-4 px-3">
                        サンプルサンプルサンプル
                    </div>
                </div>

            <div class="flex items-center justify-center mb-20">
                <button
                    type="submit"
                    name="action"
                    value="save"
                    class="w-fit max-w-xs bg-navy-800 text-white rounded-sm px-10 py-10 text-lg font-medium hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                >
                    ここからスタート
                </button>
            </div>
            <div class="flex items-center justify-center gap-20">
                <button
                    type="submit"
                    name="action"
                    value="save"
                    class="w-fit max-w-xs bg-navy-800 text-white rounded-sm px-10 py-3 text-sm font-medium hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                >
                    ペルソナの作成
                </button>
                <button
                    type="submit"
                    name="action"
                    value="save"
                    class="w-fit max-w-xs bg-navy-800 text-white rounded-sm px-10 py-3 text-sm font-medium hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                >
                    求人票の作成
                </button>
            </div>
        </div>
    </x-saas.main-inner>
</x-saas.outline>
