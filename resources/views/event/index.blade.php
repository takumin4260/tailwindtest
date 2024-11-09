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
            <div class="w-3/4 mx-auto py-8 px-4">
                <!-- 最後にアクセスしたプロジェクト -->
                <div class="flex justify-center items-center mb-8 gap-32">
                    <h3 class="text-gray-700">最後にアクセスしたプロジェクト：イベント名</h3>
                    <button
                        class="bg-yellow-400 hover:bg-yellow-500 px-4 py-2 rounded-md font-medium text-white">
                        編集を再開する
                    </button>
                </div>
                <!-- 一覧 -->
                <h4 class="text-gray-500 mb-4 text-center">備考</h4>

                <div class="bg-white p-12">
                    <!-- イベントカードグリッド -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-sm mb-5">
                                <div class="aspect-video bg-gray-200"></div>
                                <div class="py-4 px-2">
                                    <h5 class="text-gray-900 font-medium mb-12">イベント名（公開順）</h5>
                                    <p class="text-gray-500 text-center mb-6">最終編集日：2024年10月4日</p>
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center gap-1">
                                            <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 16px; height: 16px; opacity: 1;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#4B4B4B;}
</style>
                                                <g>
                                                    <path class="st0" d="M490.249,308.087v-0.01L348.89,449.436c-17.525,17.525-40.416,26.237-63.459,26.256
		c-23.042-0.02-45.935-8.732-63.458-26.256L21.751,249.215L0,270.984l200.222,200.211c23.472,23.474,54.416,35.27,85.209,35.26
		c30.794,0.01,61.737-11.776,85.21-35.26L512,329.838L490.249,308.087z" style="fill: rgb(75, 75, 75);"></path>
                                                    <path class="st0" d="M54.376,228.916l200.221,200.222c17.024,17.024,44.643,17.024,61.667,0l141.358-141.369
		c17.044-17.034,17.024-44.643,0-61.656L257.422,25.891c-7.651-7.631-17.846-12.168-28.62-12.708L79.852,5.601
		C67.535,4.971,55.538,9.597,46.805,18.32c-8.712,8.722-13.339,20.73-12.698,33.046l7.571,148.939
		C42.22,211.09,46.746,221.285,54.376,228.916z M115.041,86.535c14.02-14.02,36.732-14.02,50.751,0
		c14.02,14.02,14.02,36.742,0,50.761c-14.02,14.02-36.731,14.02-50.751,0C101.022,123.277,101.022,100.555,115.041,86.535z" style="fill: rgb(75, 75, 75);"></path>
                                                </g>
</svg>
                                            <span class="text-gray-600 tracking-tight">アート・写真</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 16px; height: 16px; opacity: 1;" xml:space="preserve">
                                                <style type="text/css">
                                                    .st0{fill:#4B4B4B;}
                                                </style>
                                                                                                <g>
                                                                                                    <path class="st0" d="M256,265.308c73.252,0,132.644-59.391,132.644-132.654C388.644,59.412,329.252,0,256,0
                                                        c-73.262,0-132.643,59.412-132.643,132.654C123.357,205.917,182.738,265.308,256,265.308z" style="fill: rgb(75, 75, 75);"></path>
                                                                                                    <path class="st0" d="M425.874,393.104c-5.922-35.474-36-84.509-57.552-107.465c-5.829-6.212-15.948-3.628-19.504-1.427
                                                        c-27.04,16.672-58.782,26.399-92.819,26.399c-34.036,0-65.778-9.727-92.818-26.399c-3.555-2.201-13.675-4.785-19.505,1.427
                                                        c-21.55,22.956-51.628,71.991-57.551,107.465C71.573,480.444,164.877,512,256,512C347.123,512,440.427,480.444,425.874,393.104z" style="fill: rgb(75, 75, 75);"></path>
                                                                                                </g>
                                                </svg>
                                            <span class="text-gray-600">ShogoMat...</span>
                                        </div>
                                    </div>
                                    <button
                                        class="w-full bg-yellow-400 hover:bg-yellow-500 text-white text-gray-900 px-4 py-2 rounded-md font-medium">
                                        編集する
                                    </button>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <footer class="h-14 flex items-center bg-navy-800  text-white">
                <div class="mx-auto text-center">
                    <h2 class="text-base font-light">©QUEE, inc.</h2>
                </div>
            </footer>
        </main>
    </div>
</div>
</body>
</html>
