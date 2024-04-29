<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>W</title>
    <link rel="stylesheet" href="{{ asset('/css/greatW_style.css') }}">
</head>

<body>

    {{-- 別のgreatWへのリンク --}}
    <table align="center" border="1" bgcolor="#ffffdb">
        <tr>
            <td>
                <strong>
                    <font size="4">みんなのW</font>
                </strong>
                <br>
                <a class="link" href="/latest">最新のW</a>
                <a class="link" href="/popular">人気のW</a>
                <a class="link" href="/search">日付検索W</a>
                <br>
            </td>
        </tr>
    </table><br>

    {{-- ここに投稿されたお題15件が表示される --}}
    @yield('content')

    {{-- 別のgreatWへのリンク --}}
    <br><table align="center" border="1" bgcolor="#ffffdb">
        <tr>
            <td>
                <strong>
                    <font size="4">みんなのW</font>
                </strong>
                <br>
                <a class="link" href="/latest">最新のW</a>
                <a class="link" href="/popular">人気のW</a>
                <a class="link" href="/search">日付検索W</a>
                <br>
            </td>
        </tr>
    </table><br>

    {{-- TOP画面に戻るボタン --}}
    <input class="button" type ="button" value ="TOP画面に戻る" onclick ="location.href = '/'"><br><br>

    {{-- BGM --}}
    <audio id="Waudio"src="{{asset('storage/audio/greatW.mp3')}}" preload="auto" loop></audio>
    <script>
        window.onload = function() {
            setTimeout(function() {
                var audio = document.getElementById("Waudio");
                audio.play();
            }, 2000);
        };
    </script>

</body>

</html>
