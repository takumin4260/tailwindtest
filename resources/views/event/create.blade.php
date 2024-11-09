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
        <h1 class="text-lg font-semibold">QUEE</h1>
        <div class="mx-auto text-center">
            <h2 class="text-base font-bold">イベント作成</h2>
        </div>
    </header>

    <!-- サイドバー -->
    <aside class="hidden w-64 bg-navy-800 lg:block pt-14 border-r">
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
                <div class="space-y-1">
                    <a href="#"
                       class="flex items-center px-3 py-2 text-sm gap-2 font-medium text-gray-400 hover:bg-navy-700">
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
    <main class="flex-1 overflow-y-auto pt-14">
        <div class="w-full bg-white border-b px-6 py-4">
            <div class="flex items-center justify-center max-w-4xl mx-auto flex-wrap space-y-2">
                <img src="{{ url('storage/human_icon.png') }}" alt="" class="h-10 w-10 sm:mr-5"/>
                <p class="text-gray-600 flex-none text-center w-fit sm:text-md text-sm">
                    以下の項目を記入すると、プロジェクトのイベントが作成できます。</p>
                <div class="flex items-center justify-center min-w-[160px]">
                    <span class="px-10 sm:ml-5 py-2 bg-gray-100 text-gray-600 rounded-lg text-sm">まだ完了できません</span>
                </div>
            </div>
        </div>
        <div class="flex-1 overflow-y-auto bg-admin">
            <div class="w-full sm:w-3/4 mx-auto py-8 px-4">
                <div class="mb-6">
                    <a href="#" class="inline-flex items-center text-sm text-blue-600 hover:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6"/>
                        </svg>
                        イベント編集に戻る
                    </a>
                </div>

                <div class="bg-green-50 p-3 flex items-center gap-3">
                    <img src="{{ url('storage/human_icon.png') }}" alt="ヒント" class="w-12 h-12 mt-0.5"/>
                    <p class="text-green-800 text-sm">項目を参考にストーリーを書き進めましょう。</p>
                </div>

                <form class="space-y-12">
                    <div class="bg-white py-10 px-2 sm:px-8">
                        <!-- イベント名 -->
                        <div class="mb-28">
                            <div class="flex items-center gap-2 mb-2">
                                <label for="event-name"
                                       class="block text-sm font-medium text-gray-700">イベント名</label>
                                <span
                                    class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-3">今回実施するイベントを名前をつけましょう</p>
                            <input
                                type="text"
                                id="event-name"
                                class="block w-full rounded-md border-gray-300 border focus:border-green-500 focus:ring-green-500 sm:text-sm py-4 px-3"
                                placeholder="入力はこちら"
                            >
                        </div>

                        <!-- 会場名 -->
                        <div class="mb-28">
                            <div class="flex items-center gap-2 mb-2">
                                <label for="venue-name"
                                       class="block text-sm font-medium text-gray-700">会場名</label>
                                <span
                                    class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-3">今回実施する会場名を書きましょう</p>
                            <input
                                type="text"
                                id="venue-name"
                                class="block w-full rounded-md border-gray-300 border focus:border-green-500 focus:ring-green-500 sm:text-sm py-4 px-3"
                                placeholder="入力はこちら"
                            >
                        </div>

                        <!-- 会場URL -->
                        <div class="mb-28">
                            <div class="flex items-center gap-2 mb-2">
                                <label for="venue-url"
                                       class="block text-sm font-medium text-gray-700">会場URL</label>
                                <span
                                    class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-3">
                                今回実施する会場URL（Googleマップ）を添付しましょう</p>
                            <input
                                type="url"
                                id="venue-url"
                                class="block w-full rounded-md border-gray-300 border focus:border-green-500 focus:ring-green-500 sm:text-sm py-4 px-3"
                                placeholder="入力はこちら"
                            >
                        </div>

                        <!-- 開催日時 -->
                        <div class="mb-28">
                            <div class="flex items-center gap-2 mb-2">
                                <label for="event-date"
                                       class="block text-sm font-medium text-gray-700">開催日時</label>
                                <span
                                    class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-3">今回実施するイベントの日時を書きましょう</p>
                            <input
                                type="date"
                                id="event-date"
                                class="block w-full rounded-md border-gray-300 border focus:border-green-500 focus:ring-green-500 sm:text-sm py-4 px-3 mb-5 text-slate-400"
                                placeholder="年/月/日"
                            >
                            <button type="button"
                                    class="flex items-center justify-center w-8 h-8 rounded-full bg-green-700 hover:bg-green-800 text-white ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path d="M12 5v14M5 12h14"/>
                                </svg>
                                <span class="sr-only">日時を追加</span>
                            </button>
                        </div>

                        <!-- 定員人数 -->
                        <div class="mb-10"><!-- フォームの最後の場合、mb-10に変更 -->
                            <div class="flex items-center gap-2 mb-2">
                                <label for="capacity"
                                       class="block text-sm font-medium text-gray-700">定員人数</label>
                                <span
                                    class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-3">今回実施するイベントの定員人数を書きましょう</p>
                            <input
                                type="number"
                                id="capacity"
                                class="block w-full rounded-md border-gray-300 border focus:border-green-500 focus:ring-green-500 sm:text-sm py-4 px-3"
                                placeholder="入力はこちら"
                            >
                        </div>

                        <!-- 抽選設定 -->
                        <div class="mb-28">
                            <div class="flex items-center gap-2 mb-2">
                                <label class="block text-sm font-medium text-gray-700">抽選の設定について</label>
                                <span
                                    class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">『あり』か『なし』どちらか1つを選択しましょう</p>

                            <div class="mt-2">
                                <p class="text-sm text-gray-600 mb-1 border-b-2 pb-2 mb-4">抽選の設定とは</p>
                                <p class="text-sm text-gray-600 mb-4">
                                    『あり』の場合、イベントに申し込んだユーザーを<span
                                        class="text-green-600">抽選形式</span>にて当選を発表します。<br>
                                    『なし』の場合、イベントに申し込んだユーザーを<span
                                        class="text-green-600">先着順</span>にて当選を発表します。
                                </p>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <label class="relative flex cursor-pointer">
                                    <input type="radio" name="lottery" value="yes" class="sr-only peer">
                                    <div
                                        class="w-full p-4 text-center rounded border peer-checked:bg-green-500 peer-checked:text-white peer-checked:border-green-500 text-gray-600 border-gray-200">
                                        抽選あり
                                    </div>
                                </label>
                                <label class="relative flex cursor-pointer">
                                    <input type="radio" name="lottery" value="no" class="sr-only peer">
                                    <div
                                        class="w-full p-4 text-center rounded border peer-checked:bg-green-500 peer-checked:text-white peer-checked:border-green-500 text-gray-600 border-gray-200">
                                        抽選なし
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- 認証設定 -->
                        <div class="mb-28">
                            <div class="flex items-center gap-2 mb-2">
                                <label class="block text-sm font-medium text-gray-700">認証コードの設定について</label>
                                <span
                                    class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-2">3つのうちどちらか1つを選択しましょう</p>

                            <div class="mt-2">
                                <p class="text-sm text-gray-600 mb-1 border-b-2 pb-2 mb-4">認証コードの設定とは</p>
                                <p class="text-sm text-gray-600 mb-4">
                                    『画面長押し』の場合、特定画面を長押しすることによって、チケット利用の判定をします。<br>
                                    『QRコード認証』の場合、ユーザーに配布されたQRコードを専用端末で読み取ることで、チケット利用の判定をします。<br>
                                    『不必要』の場合、チケットを配布するのみとなり、利用の有無をシステムで管理しません。
                                </p>
                            </div>

                            <div class="grid grid-cols-3 sm:gap-4 gap-2 sm:text-md text-sm">
                                <label class="relative flex cursor-pointer">
                                    <input type="radio" name="lottery" value="screen" class="sr-only peer">
                                    <div
                                        class="flex items-center justify-center w-full sm:p-4 p-2 text-center rounded border peer-checked:bg-green-500 peer-checked:text-white peer-checked:border-green-500 text-gray-600 border-gray-200">
                                        画面長押し
                                    </div>
                                </label>
                                <label class="relative flex cursor-pointer">
                                    <input type="radio" name="lottery" value="qr" class="sr-only peer">
                                    <div
                                        class="flex items-center justify-center w-full sm:p-4 p-2 text-center rounded border peer-checked:bg-green-500 peer-checked:text-white peer-checked:border-green-500 text-gray-600 border-gray-200">
                                        QRコード認証
                                    </div>
                                </label>
                                <label class="relative flex cursor-pointer">
                                    <input type="radio" name="lottery" value="none" class="sr-only peer">
                                    <div
                                        class="flex items-center justify-center w-full sm:p-4 p-2 text-center rounded border peer-checked:bg-green-500 peer-checked:text-white peer-checked:border-green-500 text-gray-600 border-gray-200">
                                        不必要
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- 通知設定 -->
                        <div class="mb-10">
                            <div class="flex items-center gap-2 mb-2">
                                <label class="block text-sm font-medium text-gray-700">認証コードの設定について</label>
                                <span
                                    class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-2">３つの中から複数選択しましょう</p>

                            <div class="mt-2">
                                <p class="text-sm text-gray-600 mb-1 border-b-2 pb-2 mb-4">通知の設定とは</p>
                                <p class="text-sm text-gray-600 mb-4">
                                    LINEメッセージにて、通知を配信することができます。
                                </p>
                            </div>

                            <div class="grid grid-cols-3 sm:gap-4 gap-2 sm:text-md">
                                <label class="relative flex cursor-pointer">
                                    <input type="checkbox" name="authentication[]" value="screen" class="sr-only peer">
                                    <div
                                        class="flex items-center justify-center w-full p-4 text-center rounded border peer-checked:bg-green-500 peer-checked:text-white peer-checked:border-green-500 text-gray-600 border-gray-200">
                                        10分前
                                    </div>
                                </label>
                                <label class="relative flex cursor-pointer">
                                    <input type="checkbox" name="authentication[]" value="qr" class="sr-only peer">
                                    <div
                                        class="flex items-center justify-center w-full p-4 text-center rounded border peer-checked:bg-green-500 peer-checked:text-white peer-checked:border-green-500 text-gray-600 border-gray-200">
                                        時刻
                                    </div>
                                </label>
                                <label class="relative flex cursor-pointer">
                                    <input type="checkbox" name="authentication[]" value="none" class="sr-only peer">
                                    <div
                                        class="flex items-center justify-center w-full p-4 text-center rounded border peer-checked:bg-green-500 peer-checked:text-white peer-checked:border-green-500 text-gray-600 border-gray-200">
                                        遅延
                                    </div>
                                </label>
                            </div>
                        </div>

                    </div>

                    <!-- 備考 -->
                    <div class="bg-slate-200 py-6 px-4">
                        <div class="text-sm font-medium text-gray-700 mb-2"><span>備考</span></div>
                        <p class="text-sm text-gray-600">サンプルサンプル</p>
                    </div>

                    <div class="flex flex-col items-center gap-4">
                        <button
                            type="submit"
                            class="w-fit max-w-xs bg-navy-800 text-white rounded-sm px-10 py-3 text-sm font-medium hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                        >
                            保存する
                        </button>
                        <div class="mb-6">
                            <a href="#" class="inline-flex items-center text-sm text-blue-600 hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <polyline points="15 18 9 12 15 6"></polyline>
                                </svg>
                                プロジェクト編集に戻る
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer class="h-14 flex items-center bg-navy-800  text-white">
            <div class="mx-auto text-center">
                <h2 class="text-base font-light">©QUEE, inc.</h2>
            </div>
        </footer>
    </main>
</div>
</body>
</html>
