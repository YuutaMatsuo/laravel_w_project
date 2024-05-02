<x-layout>
    {{-- cssのパス --}}
    <x-slot name='style_path'>
        /css/style.css
    </x-slot>

    {{-- メタタグ ※空欄 --}}
    <x-slot name='meta_tag'>
        <meta http-equiv="refresh" content="5; URL={{ route('game.animation') }}">
    </x-slot>

    {{-- audioファイルのパス --}}
    <x-slot name='audio_path'>
        /storage/audio/wait1.mp3
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
    </x-slot>

    {{-- コンテンツ --}}
    <h2>W作成中</h2>
    ＼ちょっと待ってね／<br>
    <img src="{{ asset('/storage/images/mazemaze.GIF') }}" alt="W"><br>
</x-layout>
