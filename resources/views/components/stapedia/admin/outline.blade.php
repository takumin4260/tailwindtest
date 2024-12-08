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
    <header class="fixed top-0 left-0 right-0 flex h-14 items-center border-b bg-navy-800 px-6 z-50">
        <button id="sidebar-toggle" class="mr-4 lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <h1 class="text-lg font-semibold hidden text-white sm:block">Stapedia</h1>
    </header>

    <!-- サイドバー -->
    <aside id="sidebar" class="fixed top-0 left-0 w-64 h-full bg-navy-800 pt-14 border-r z-40 transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0">
        <div class="px-3 py-4">
            <div class="space-y-4">
                <div class="space-y-1">
                    <div class="px-3 py-2 text-sm font-medium text-gray-400">教材マスタ管理</div>
                    <nav class="space-y-1">
                        <a href="#"
                           class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700 pl-6">
                            一覧
                        </a>
                        <a href="#"
                           class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700 pl-6">
                            新規追加
                        </a>
                    </nav>
                </div>

                <div class="space-y-1 border-t border-gray-400">
                    <div class="px-3 py-2 mt-2 text-sm font-medium text-gray-400">生徒管理</div>
                    <nav class="space-y-1">
                        <a href="#"
                           class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700 pl-6">
                            一覧
                        </a>
                        <a href="#"
                           class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700 pl-6">
                            新規登録
                        </a>
                    </nav>
                </div>

                <div class="space-y-1 border-t border-gray-400">
                    <div class="px-3 py-2 mt-2 text-sm font-medium text-gray-400">講師管理</div>
                    <nav class="space-y-1">
                        <a href="#"
                           class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700 pl-6">
                            一覧
                        </a>
                        <a href="#"
                           class="flex items-center gap-3 rounded-lg px-3 py-2 text-gray-300 hover:bg-navy-700 pl-6">
                            新規登録
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </aside>

    <!-- メインコンテンツ -->
    <main class="flex-1 overflow-y-auto transition-all duration-300 ease-in-out lg:ml-64">
        {{ $slot }}
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
