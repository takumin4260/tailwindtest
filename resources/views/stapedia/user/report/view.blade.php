<x-stapedia.user.outline>
    <x-stapedia.main-inner>
        <x-slot:title>◯月月報</x-slot:title>
        <h1 class="text-lg font-semibold text-gray-800 mb-10">進捗関連の数値</h1>
        <div class="container flex w-full justify-start mt-5 mb-14">
            <div class="w-2/5 mr-8">
                <div class="custom-card">
                    <div class="label-text">進捗達成割合</div>
                    <div>
                        <span class="number-large">70</span>
                        <span class="number-small">%</span>
                    </div>
                </div>
            </div>
            <div class="w-2/5">
                <div class="custom-card">
                    <div class="label-text">進捗達成数</div>
                    <div>
                        <span class="number-large">5</span>
                        <span class="number-small">/31</span>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="text-lg font-semibold text-gray-800 mb-10">講師コメント</h1>
        <div class="p-5 w-full bg-white">ああああ<br>サンプルサンプル<br>サンプルサンプル<br>サンプルサンプル<br>サンプルサンプル</div>
        <p class="text-right mt-10">2024/06/10更新</p>
    </x-stapedia.main-inner>
</x-stapedia.user.outline>

<style>
    /* 呼出人数 */
    .custom-card {
        background-color: #fefbf3; /* 背景色をカスタマイズ */
        border-radius: 10px;
        padding: 20px 32px;
        text-align: center;
    }

    .number-large {
        font-size: 80px;
        font-weight: bold;
        color: #1e4229; /* 濃い緑のテキスト色 */
    }

    .number-small {
        font-size: 30px;
        color: #1e4229; /* 濃い緑のテキスト色 */
    }

    .label-text {
        font-size: 16px;
        font-weight: bold;
        color: #1e4229; /* 濃い緑のテキスト色 */
    }

    /* タブ部分 */
    .alert-kind.nav {
        justify-content: center;
    }

    .alert-kind.nav .nav-item {
        width: 50%;
        text-align: center;
    }

    .nav-tabs .nav-link {
        color: #B1B1B1;
        border: none;
        border-bottom: 1px solid #B1B1B1;
        font-weight: bold;
    }

    .alert-kind.nav .nav-item .active {
        border: none;
        border-bottom: 1px solid #204936;
        color: #204936;
    }

    .table {
        text-align: center;
    }

    @media (max-width: 768px) {
        .alert-table {
            font-size: 13px !important;
        }

        .alert-btn {
            font-size: 16px !important;
        }

        .custom-card {
            margin-top: 20px;
        }
    }
</style>
