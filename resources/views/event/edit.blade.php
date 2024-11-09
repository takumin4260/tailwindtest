<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-gray-100">
<div class="flex h-screen bg-white">
    <!-- サイドバー -->
    <aside class="hidden w-64 bg-navy-800 lg:block pt-14" style="border-right: 1px solid rgba(255, 255, 255, 0.1);">
        <div class="px-3 py-8">
            <div class="space-y-4">
                <!-- プロジェクト名とボタン -->
                <div class="">
                    <div class="flex items-center gap-2 px-2 py-1.5 mb-4">
                        <div class="w-8 h-8 bg-orange-200/20 rounded flex items-center justify-center text-orange-200 text-xs font-medium">
                            sample
                        </div>
                        <span class="text-gray-200 text-sm">イベント名</span>
                    </div>
                    <button class="w-fit justify-center gap-2 bg-green-600 text-white hover:bg-green-700 px-5 py-1.5 rounded-lg flex items-center text-sm mt-2 mb-7 mx-auto">
                        プロジェクト一覧へ
                    </button>
                    <a href="#" class="flex items-center gap-2 px-2 py-1.5 text-gray-400 hover:text-gray-300 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"/></svg>
                        つくる
                    </a>
                </div>

                <!-- イベント編集セクション -->
                <div class="space-y-1">
                    <div class="px-3 py-2 text-sm font-medium text-gray-400">イベント編集</div>
                    <nav class="space-y-1">
                        <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            イベント編集
                        </a>
                        <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700 pl-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/></svg>
                            イベント日時設定
                        </a>
                        <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700 pl-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            イベント詳細設定
                        </a>
                        <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700 pl-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/></svg>
                            言語設定
                        </a>
                    </nav>
                </div>

                <!-- イベント管理セクション -->
                <div class="space-y-1">
                    <div class="px-3 py-2 text-sm font-medium text-gray-400">イベント管理</div>
                    <nav class="space-y-1">
                        <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                            管理する
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </aside>

    <!-- メインコンテンツ -->
    <div class="flex-1 flex flex-col">
        <!-- ヘッダー -->
        <header class="fixed top-0 left-0 right-0 flex h-14 items-center border-b bg-white px-6 z-50">
            <h1 class="text-lg font-semibold">QUEE</h1>
            <div class="mx-auto text-center">
                <h2 class="text-base font-medium">イベント作成</h2>
            </div>
        </header>

        <!-- メインコンテンツ -->
        <main class="flex-1 overflow-y-auto pt-14 bg-admin">
            <div class="h-14 flex items-center justify-center bg-navy-800 text-white gap-6">
                <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 16px; height: 16px; opacity: 1;" xml:space="preserve">
                <style type="text/css">
                    .st0{fill:#4B4B4B;}
                </style>
                    <g>
                        <path class="st0" d="M256,0C114.612,0,0,114.612,0,256s114.612,256,256,256s256-114.612,256-256S397.388,0,256,0z M250.669,88.462
                        c26.504,0,47.998,21.482,47.998,48.01c0,26.496-21.494,47.994-47.998,47.994c-26.513,0-48.006-21.498-48.006-47.994
                        C202.662,109.944,224.156,88.462,250.669,88.462z M315.554,428c0,3.343-2.709,6.044-6.048,6.044h-103.3
                        c-3.339,0-6.044-2.7-6.044-6.044v-26.372c0-3.343,2.705-6.052,6.044-6.052h12.808c6.678,0,12.096-5.418,12.096-12.095V277.72
                        c0,0-26.612,2.61-35.55,2.98c-8.937,0.363-20.452-13.964,3.549-25.96l82.484-45.836c1.96-1.038,4.327-0.988,6.225,0.164
                        c1.906,1.152,3.067,3.211,3.067,5.434v168.979c0,6.677,5.418,12.095,12.091,12.095h6.529c3.339,0,6.048,2.709,6.048,6.052V428z" style="fill: rgb(255, 255, 255);"></path>
                    </g>
                </svg>
                <h2 class="text-sm font-light">お知らせお知らせお知らせ</h2>
            </div>
            <div class="w-full sm:w-3/4 mx-auto py-8 px-4">
                <!-- タブナビゲーション -->
                <div class="flex space-y-4 flex-wrap sm:justify-between justify-start items-center mb-6">
                    <div class="inline-flex rounded-full border border-white overflow-hidden shadow-sm" role="group">
                        <button class="px-8 py-1 text-xs font-medium text-white bg-navy-800 rounded-l-md">
                            編集
                        </button>
                        <button class="px-8 py-1 text-xs font-medium text-gray-700 bg-gray-100 hover:bg-gray-200">
                            確認とアドバイス
                        </button>
                        <button class="px-8 py-1 text-xs font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-r-md">
                            承認
                        </button>
                    </div>
                    <div class="px-6 py-3 bg-gray-200 text-gray-700 rounded-md font-medium ml-auto">
                        まだ完了できません
                    </div>
                </div>

                <!-- キャラクターメッセージ -->
                <div class="bg-white rounded-lg shadow-sm sm:px-6 px-4 py-4 mb-8 flex items-center space-x-4">
                    <img src="{{ url('storage/human_icon.png') }}" alt="" class="w-14 h-14 rounded-full">
                    <div class="bg-admin flex items-center p-4 w-11/12">
                    <p class="text-gray-700">以下の項目を記入すると、イベントの売上します。</p>
                    </div>
                </div>

                <!-- カードグリッド -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- イベントの編集 -->
                    <div class="bg-white rounded-xl shadow-md px-6 py-8 flex items-center justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-start space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-gray-900 mb-4">イベントの編集</h3>
                                <p class="text-sm text-gray-500">イベント全体の情報登録</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>

                    <!-- イベントの受付設定 -->
                    <div class="bg-white rounded-xl shadow-md px-6 py-8 flex items-center justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-gray-900 mb-4">イベントの受付設定</h3>
                                <p class="text-sm text-gray-500">開演時間・受付時間帯など</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>

                    <!-- イベントの詳細設定 -->
                    <div class="bg-white rounded-xl shadow-md px-6 py-8 flex items-center justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-gray-900 mb-4">イベントの詳細設定</h3>
                                <p class="text-sm text-gray-500">通知設定・抽選・認証など</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>

                    <!-- 画像の設定 -->
                    <div class="bg-white rounded-xl shadow-md px-6 py-8 flex items-center justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-gray-900 mb-4">画像の設定</h3>
                                <p class="text-sm text-gray-500">イベント・アーティスト画像など</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>

                    <!-- 整理券の設定 -->
                    <div class="bg-white rounded-xl shadow-md px-6 py-8 flex items-center justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-gray-900 mb-4">整理券の設定</h3>
                                <p class="text-sm text-gray-500">物販などの列をデジタル管理</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>

                    <!-- チケットの設定 -->
                    <div class="bg-white rounded-xl shadow-md px-6 py-8 flex items-center justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-gray-900 mb-4">チケットの設定</h3>
                                <p class="text-sm text-gray-500">入場チケットのデジタル管理</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

                <!-- 下部ボタン -->
                <div class="mt-8 flex justify-center">
                    <button class="px-6 py-3 bg-gray-200 text-gray-700 rounded-md font-medium">まだ完了できません</button>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
