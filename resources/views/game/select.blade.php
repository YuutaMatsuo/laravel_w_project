<x-layout>
    {{-- cssのパス --}}
    <x-slot name='style_path'>
        /css/style.css
    </x-slot>

    {{-- メタタグ ※空欄 --}}
    <x-slot name='meta_tag'>
    </x-slot>

    {{-- audioファイルのパス --}}
    <x-slot name='audio_path'>
        /storage/audio/silent.mp3
    </x-slot>

    {{-- ディレイ秒数 --}}
    <x-slot name='delay'>
        2000
    </x-slot>

    {{-- メニューバー ※空欄 --}}
    <x-slot name='menu'>
    </x-slot>

    {{-- トップへ戻るボタン ※空欄 --}}
    <x-slot name='button'>
    </x-slot>

    {{-- コンテンツ --}}
    <h2>▼遊ぶ人数をえらんでね！！</h2>
    <br>
    <a href="{{ route('game.start', ['playerCnt' => 1]) }}"> <img src="{{ asset('storage/images/B_hitori.jpg') }}"
            width="189" height="96" alt="1人で遊ぶ"></a>
    <a href="{{ route('game.start', ['playerCnt' => 2]) }}"> <img src="{{ asset('storage/images/B_hutari.jpg') }}"
            width="189" height="96" alt="2人で遊ぶ"></a>
    <br>
    <br>
    <a href="{{ route('game.start', ['playerCnt' => 3]) }}"> <img src="{{ asset('storage/images/B_sannin.jpg') }}"
            width="189" height="96" alt="3人で遊ぶ"></a>
    <a href="{{ route('game.start', ['playerCnt' => 4]) }}"> <img src="{{ asset('storage/images/B_yonin.jpg') }}"
            width="189" height="96" alt="4人で遊ぶ"></a>
    <br>
    <br>
    <p>
        <font size="2">2人以上で遊ぶ場合は入力が完了したら次の人にバトンタッチしてね！</font>
    </p>
    <input class="button" type ="button" value ="TOP画面に戻る" onclick ="location.href = '{{ route('top') }}'"><br><br>
    <br>
    <br>
</x-layout>
