@extends('layouts.greatW')

@section('content')
    <table class="post_table" align="center" border="1" bgcolor="#ffffdb">
        <tr>
            <td>
                {{-- 投稿された文 --}}
                <p class="text">日付検索W確認用テキスト</p>
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
                            <input type="hidden" name="wid" value=書き換える >
                            <input type="image" name="submit" src="{{ asset('storage/images/B_iine.jpg')}}" width="50" height="50" alt="いいね">
                        </form>
                    </div>
                </div>
            </td>
        </tr>
    </table>
@endsection
