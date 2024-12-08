<x-stapedia.user.outline>
    <x-stapedia.main-inner>
        <x-slot:title>【国語】教材A</x-slot:title>
        @php
            $headers = [
                ['label' => '開始日'],
                ['label' => '修了目標日'],
                ['label' => '全体のページ数'],
                ['label' => '1日で進めるページ数（平日）'],
                ['label' => '1日で進めるページ数（休日）']
            ];

            $contents = [
                [
                    "5/30",
                    "6/30",
                    "116",
                    "4",
                    "6"
                ]
            ];
        @endphp
        <x-stapedia.parts.table :headers="$headers" :contents="$contents"/>
        <div class="flex flex-wrap" id="tabs-id">
            <div class="w-full">
                <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-black" onclick="changeAtiveTab(event,'tab-profile')">
                            進捗表
                        </a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-black bg-white" onclick="changeAtiveTab(event,'tab-settings')">
                            進捗グラフ
                        </a>
                    </li>
                </ul>
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                    <div class="px-4 py-5 flex-auto">
                        <div class="tab-content tab-space">
                            <div class="block" id="tab-profile">
                                <div class="w-full px-4 py-6 sm:px-6 lg:px-8 lg:py-4 mx-auto">
                                    <button
                                        type="submit"
                                        name="action"
                                        value="save"
                                        class="m-4 w-fit max-w-xs bg-navy-800 text-white rounded-sm px-10 py-3 text-sm font-medium hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                                    >
                                        今日の進捗へ
                                    </button>
                                    @php
                                        $headers = [
                                            ['label' => '経過'],
                                            ['label' => '日付'],
                                            ['label' => '曜日'],
                                            ['label' => '進んだページ数'],
                                            ['label' => '残りページ数(実際)'],
                                            ['label' => '残りページ数(理想)'],
                                        ];

                                        $contents = [
                                            ["0", "5/30", "日", "4", "100", "110"],
                                            ["1", "5/31", "月", "4", "96", "106"],
                                            ["2", "6/1", "火", "4", "92", "102"],
                                            ["3", "6/2", "水", "5", "87", "97"],
                                            ["4", "6/3", "木", "3", "84", "94"],
                                            ["5", "6/4", "金", "6", "78", "88"],
                                            ["6", "6/5", "土", "8", "70", "80"],
                                            ["7", "6/6", "日", "7", "63", "73"],
                                            ["8", "6/7", "月", "5", "58", "68"],
                                            ["9", "6/8", "火", "4", "54", "64"],
                                            ["10", "6/9", "水", "5", "49", "59"],
                                            ["11", "6/10", "木", "3", "46", "56"],
                                            ["12", "6/11", "金", "6", "40", "50"],
                                            ["13", "6/12", "土", "7", "33", "43"],
                                            ["14", "6/13", "日", "8", "25", "35"],
                                            ["15", "6/14", "月", "4", "21", "31"],
                                        ];
                                    @endphp
                                    <x-stapedia.parts.table :headers="$headers" :contents="$contents"/>
                                </div>
                            </div>
                            <div class="hidden" id="tab-settings">
                                <p>
                                    <br><br><br><br><br><br><br><br>
                                    <br><br><br><br><br><br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-stapedia.main-inner>
</x-stapedia.user.outline>

<script type="text/javascript">
    function changeAtiveTab(event,tabID){
        let element = event.target;
        while(element.nodeName !== "A"){
            element = element.parentNode;
        }
        ulElement = element.parentNode.parentNode;
        aElements = ulElement.querySelectorAll("li > a");
        tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
        for(let i = 0 ; i < aElements.length; i++){
            aElements[i].classList.remove("text-white");
            aElements[i].classList.remove("bg-black");
            aElements[i].classList.add("text-black");
            aElements[i].classList.add("bg-white");
            tabContents[i].classList.add("hidden");
            tabContents[i].classList.remove("block");
        }
        element.classList.remove("text-black");
        element.classList.remove("bg-white");
        element.classList.add("text-white");
        element.classList.add("bg-black");
        document.getElementById(tabID).classList.remove("hidden");
        document.getElementById(tabID).classList.add("block");
    }
</script>
