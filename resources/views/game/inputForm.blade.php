<x-layout>
    {{-- cssのパス --}}
    <x-slot name='style_path'>
        /css/style.css
    </x-slot>

    {{-- audioファイルのパス --}}
    <x-slot name='audio_path'>
        /storage/audio/countdown1.mp3
    </x-slot>

        {{-- メタタグ ※空欄 --}}
        <x-slot name='meta_tag'>
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
    <h2>▼あなたのお題は『{{ $title }}』だよ</h2><br><br>
    <form action = "{{ route('game.post') }}" method = "post" onSubmit="return ThroughDblClick();">
        @csrf
        <img src="{{ asset('/storage/images/nyuryoku.PNG') }}" alt="W">
        <br>ここに入力してね！<br>
        <input type="hidden" name="theme" value={{ $theme }}>
        <input type = "text" name = "text" maxlength="30" required>{{ $conjunction}}
        <br>
        <br>
        ▼完成したWに名前を入れたいときは名前を入力してね！(5文字)<br>
        <input type = "text" name = "name" width="100px" maxlength="5"><br>
        <font size="2">※入力がない場合は名無しさんになります</font><br>
        <br>
        <input class="button" type ="submit" class = "button" value = "完了">
    </form>

</x-layout>
