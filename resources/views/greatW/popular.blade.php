<x-layout>
    {{-- cssのパス --}}
    <x-slot name='style_path'>
        /css/greatW_style.css
    </x-slot>

    {{-- メタタグ ※空欄 --}}
    <x-slot name='meta_tag'>
    </x-slot>

    {{-- audioファイルのパス --}}
    <x-slot name='audio_path'>
        /storage/audio/greatW.mp3
    </x-slot>

    {{-- ディレイ秒数 --}}
    <x-slot name='delay'>
        2000
    </x-slot>

    {{-- メニューバー ※空欄 --}}
    <x-slot name='menu'>
        {{-- 別のgreatWへのリンク --}}
        <table align="center" border="1" bgcolor="#ffffdb">
            <tr>
                <td>
                    <strong>
                        <font size="4">みんなのW</font>
                    </strong>
                    <br>
                    <a class="link" href="{{ route('greatW.latest') }}">最新のW</a>
                    <a class="link" href="{{ route('greatW.popular') }}">人気のW</a>
                    <a class="link" href="{{ route('greatW.search') }}">日付検索W</a>
                    <br>
                </td>
            </tr>
        </table><br>
    </x-slot>

    {{-- トップへ戻るボタン --}}
    <x-slot name='button'>
        <input class="button" type ="button" value ="TOP画面に戻る" onclick ="location.href = '{{ route('top') }}'"><br><br>
    </x-slot>

    {{-- コンテンツ --}}
    {{-- ここに投稿されたお題15件が表示される --}}
    <table class="post_table" align="center" border="1" bgcolor="#ffffdb">
        <tr>
            <td>
                {{-- 投稿された文 --}}
                <p class="text">人気のWの確認用テキスト</p>
                <div class="post_data">
                    {{-- 作成者と作成日時 --}}
                    <p class="created_at">
                        Aチームのみんな<br>
                        2024-04-28
                    </p>
                    {{-- いいねをまとめているdivタグ --}}
                    <div>
                        <p class="good_button">＼38いいね／</p>
                        <form action="書き換える" method="post">
                            <input type="hidden" name="wid" value=書き換える>
                            <input type="image" name="submit" src="{{ asset('storage/images/B_iine.jpg') }}"
                                width="50" height="50" alt="いいね">
                        </form>
                    </div>
                </div>
            </td>
        </tr>
    </table><br>
</x-layout>
