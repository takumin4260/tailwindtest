<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <!-- ヘッダー -->
    <header class="fixed top-0 left-0 right-0 flex h-14 items-center border-b bg-white px-6 z-50">
        <button id="sidebar-toggle" class="mr-4 lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <h1 class="text-lg font-semibold hidden sm:block">QUEE</h1>
        <div class="mx-auto text-center">
            <h2 class="text-base font-bold">イベント作成</h2>
        </div>
    </header>

    <!-- サイドバー -->
    <aside id="sidebar" class="fixed top-0 left-0 w-64 h-full bg-navy-800 pt-14 border-r z-40 transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0">
        <div class="px-3 py-4">
            <div class="space-y-4">
                <!-- プロジェクト名とボタン -->
                <div class="">
                    <div class="flex items-center gap-2 px-2 py-1.5 mb-4">
                        <div
                            class="w-8 h-8 bg-orange-200/20 rounded flex items-center justify-center text-orange-200 text-xs font-medium">
                            sample
                        </div>
                        <span class="text-gray-200 text-sm">イベント名</span>
                    </div>
                    <button
                        class="w-fit justify-center gap-2 bg-green-600 text-white hover:bg-green-700 px-5 py-1.5 rounded-lg flex items-center text-sm mt-2 mb-7 mx-auto">
                        プロジェクト一覧へ
                    </button>
                    <a href="#" class="flex items-center gap-2 px-2 py-1.5 text-gray-400 hover:text-gray-300 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"/>
                        </svg>
                        つくる
                    </a>
                </div>

                <!-- イベント編集セクション -->
                <div class="space-y-1">
                    <div class="px-3 py-2 text-sm font-medium text-gray-400">イベント編集</div>
                    <nav class="space-y-1">
                        <a href="#"
                           class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700 pl-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                <polyline points="22 4 12 14.01 9 11.01"/>
                            </svg>
                            イベント編集
                        </a>
                        <a href="#"
                           class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700 pl-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                            </svg>
                            イベント日時設定
                        </a>
                        <a href="#"
                           class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700 pl-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                <polyline points="22 4 12 14.01 9 11.01"/>
                            </svg>
                            イベント詳細設定
                        </a>
                        <a href="#"
                           class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700 pl-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                            </svg>
                            言語設定
                        </a>
                    </nav>
                </div>

                <!-- イベント管理セクション -->
                <div class="space-y-1 border-t border-gray-400">
                    <a href="#"
                       class="flex items-center px-3 py-2 mt-2 text-sm gap-2 font-medium text-gray-400 hover:bg-navy-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="icon icon-tabler icons-tabler-outline icon-tabler-list">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M9 6l11 0"/>
                            <path d="M9 12l11 0"/>
                            <path d="M9 18l11 0"/>
                            <path d="M5 6l0 .01"/>
                            <path d="M5 12l0 .01"/>
                            <path d="M5 18l0 .01"/>
                        </svg>
                        管理する
                    </a>
                    <nav class="space-y-1">
                        <a href="#"
                           class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700">
                            イベント管理
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </aside>

    <!-- メインコンテンツ -->
    <main class="flex-1 overflow-y-auto pt-14 transition-all duration-300 ease-in-out lg:ml-64">
        <!-- ここにメインコンテンツを追加 -->
        <!-- フォームフィールド、画像アップロードセクションなどを含める -->
    </main>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebar-toggle');

        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('-translate-x-full');
        });

        // 画面サイズが変更されたときにサイドバーの表示を調整
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) { // lg breakpoint
                sidebar.classList.remove('-translate-x-full');
            } else {
                sidebar.classList.add('-translate-x-full');
            }
        });
    });
</script>
</body>
</html>
