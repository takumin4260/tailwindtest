<x-stapedia.admin.outline-person>
    <x-stapedia.main-inner>
        <x-slot:title>生徒別ダッシュボード</x-slot:title>
        <!-- メインコンテンツ -->
        <div class="flex-1 flex flex-col">
            <div class="flex-1 overflow-y-auto bg-admin">

                <!-- カードグリッド -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <x-stapedia.parts.grid-card>
                        <x-slot:title>教材割り振り管理</x-slot:title>
                        <x-slot:subtitle>生徒への教材の割り振りについてはこちら</x-slot:subtitle>
                    </x-stapedia.parts.grid-card>

                    <!-- イベントの受付設定 -->
                    <x-stapedia.parts.grid-card>
                        <x-slot:title>週次mtg管理</x-slot:title>
                        <x-slot:subtitle>毎週のmtgの議事録についてはこちら</x-slot:subtitle>
                    </x-stapedia.parts.grid-card>

                    <!-- イベントの詳細設定 -->
                    <x-stapedia.parts.grid-card>
                        <x-slot:title>todo管理</x-slot:title>
                        <x-slot:subtitle>毎日の生徒のtodoについてはこちら</x-slot:subtitle>
                    </x-stapedia.parts.grid-card>

                    <!-- イベントの詳細設定 -->
                    <x-stapedia.parts.grid-card>
                        <x-slot:title>長期計画管理</x-slot:title>
                        <x-slot:subtitle>生徒の長期計画の閲覧・修正についてはこちら</x-slot:subtitle>
                    </x-stapedia.parts.grid-card>

                    <!-- イベントの詳細設定 -->
                    <x-stapedia.parts.grid-card>
                        <x-slot:title>月報管理</x-slot:title>
                        <x-slot:subtitle>保護者向けの月報についてはこちら</x-slot:subtitle>
                    </x-stapedia.parts.grid-card>

                    <x-stapedia.parts.grid-card>
                        <x-slot:title>模試管理</x-slot:title>
                        <x-slot:subtitle>模試情報についてはこちら</x-slot:subtitle>
                    </x-stapedia.parts.grid-card>
                </div>
            </div>
        </div>
    </x-stapedia.main-inner>
</x-stapedia.admin.outline-person>

