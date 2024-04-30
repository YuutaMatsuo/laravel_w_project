<x-layout>
    {{-- cssのパス --}}
    <x-slot name='style_path'>
        /css/style.css
    </x-slot>

    {{-- audioファイルのパス --}}
    <x-slot name='audio_path'>
        /storage/audio/countdown1.mp3
    </x-slot>

    {{-- ディレイ秒数 --}}
    <x-slot name='delay'>
        0
    </x-slot>

    {{-- メニューバー ※空欄 --}}
    <x-slot name='menu'>
    </x-slot>

    {{-- トップへ戻るボタン ※空欄 --}}
    <x-slot name='button'>
        <input class="button" type="button" value="TOP画面に戻る" onclick="location.href = '/'">
    </x-slot>

    {{-- コンテンツ --}}
    <h2>選択された人数は{{ $playerCnt }}人です</h2><br>

    @foreach ($roomList as $room)
        <p>$room</p>
    @endforeach
</x-layout>
