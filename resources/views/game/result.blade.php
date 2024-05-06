<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>W</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <script>
        var dblClickFlag = null;

        function ThroughDblClick() {
            console.log(dblClickFlag == null);
            // ダブルクリック（連続ポスト）の制御
            if (dblClickFlag == null) {
                dblClickFlag = 1;
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>

<body>
    <img src="{{ asset('/storage/images/result.PNG') }}" alt="W">
    <table align="center" border="1" bgcolor="#ffffdb">
        <tr>
            <td><br>
                {{ session('gameData')->getCompletedText()[0] }}<br>
                {{ session('gameData')->getCompletedText()[1] }}<br>
                {{ session('gameData')->getCompletedText()[2] }}<br>
                {{ session('gameData')->getCompletedText()[3] }}<br>
                <br><div class="createrName">
                    <font size="2"> {{ session('gameData')->getCreaterNames() }} </font>
                </div>
            </td>
        </tr>
    </table>
    <br> <input class="menu_button" type="button" value="もう１回遊ぶ"
        onclick="location.href = ' {{ route('game.select') }} '"> <br>
    <br> <input class="menu_button" type="button" value="終わる" onclick="location.href = ' {{ route('top') }} '">
    <br>
    <br> <input class="menu_button" type="button" value="みんなのWをみる"
        onclick="location.href = ' {{ route('greatW.latest') }} '"> <br>


    {{-- BGM --}}
    <audio loop autoplay="autoplay" src="{{ asset('/storage/audio/result1.mp3') }}"></audio>
    <audio id="audio" src="{{ asset('/storage/audio/waa1.mp3') }}" preload="auto"></audio>
    <script>
        window.onload = function() {
            setTimeout(function() {
                var audio = document.getElementById("audio");
                audio.play();
            }, 2000);
        };
    </script>
    <audio id="audio" src="{{ asset('/storage/audio/result2.mp3') }}" preload="auto"></audio>
    <script>
        window.onload = function() {
            setTimeout(function() {
                var audio = document.getElementById("audio");
                audio.play();
            }, 1000);
        };
    </script>
</body>

</html>
