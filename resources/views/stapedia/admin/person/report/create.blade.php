<x-stapedia.admin.outline-person>
    <x-stapedia.main-inner>
        <x-slot:title>月報</x-slot:title>

        <x-stapedia.parts.input.text
            :option="['label' => '月報名', 'required' => 'on', 'description' => '今日進めたページ数を入力しましょう', 'placeholder' => '◯月分月報', 'name' => 'capacity']"/>
        <h1 class="text-lg font-semibold text-black mb-10">進捗関連の数値</h1>
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

        <x-stapedia.parts.input.textarea
            :option="['label' => '講師コメント', 'required' => 'on', 'description' => '今日進めたページ数を入力しましょう', 'placeholder' => '入力はこちら', 'name' => 'capacity']"/>

        <div class="flex flex-col items-center gap-4">
            <x-stapedia.parts.button-submit/>
        </div>
    </x-stapedia.main-inner>
</x-stapedia.admin.outline-person>

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
