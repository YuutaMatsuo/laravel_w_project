<x-layout>
    {{-- cssのパス --}}
    <x-slot name='style_path'>
        /css/textAnimation.css
    </x-slot>

    {{-- メタタグ --}}
    <x-slot name='meta_tag'>
        <meta http-equiv="refresh" content="7; {{ route('game.result') }}">
    </x-slot>

    {{-- audioファイルのパス --}}
    <x-slot name='audio_path'>
        /storage/audio/silent
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
    <div class="textbox">
        {{-- 文字表示枠 --}}
        <p class="itsu">{{ session('gameData')->getCompletedText()[0] }}</p>
		<p class="doko">{{ session('gameData')->getCompletedText()[1] }}</p>
		<p class="dare">{{ session('gameData')->getCompletedText()[2] }}</p>
		<p class="nani">{{ session('gameData')->getCompletedText()[3] }}</p>

        {{-- @php
            echo '<pre>';
            var_dump($texts);
            echo '</pre>';
        @endphp --}}

    </div>
</x-layout>
