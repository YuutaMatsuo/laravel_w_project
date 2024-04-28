<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>W</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <img src="{{ asset('storage/images/aikon.PNG') }}" alt="W"> <br><br>
    <input type="button" value="Wをはじめる" class="menu_button" onclick="location.href = '/select'"><br> <br>
    <input type="button" value="みんなのW" class="menu_button" onclick="location.href = '/latest'"><br> <br>
    <strong>◇ルール説明◇</strong>
    <table align="center" border="1" style="width: 550px" style="height:500">
        <tr>
            <td>
                <div style="text-align: left;">
                    ①Wをはじめるボタンを押してまずは人数を選択してね！<br>
                    ②『いつ』『どこで』『だれが』『なにをした』のお題に合わせて入力！<br> ③完成したW(文章)をみんなで楽しもう！<br>
                </div>
            </td>
        </tr>
    </table>
    <br> ※このアプリは音が出ます。端末で音量設定をしてください<br>

    {{-- BGM --}}
    <audio id="audio" src="{{ asset('storage/audio/top.mp3') }}" preload="auto" loop></audio>
    <script>
        window.onload = function() {
            setTimeout(function() {
                var audio = document.getElementById("audio");
                audio.play();
            }, 10000);
        };
    </script>
</body>

</html>
