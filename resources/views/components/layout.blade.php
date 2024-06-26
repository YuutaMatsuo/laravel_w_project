<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>W</title>
    {{ $meta_tag }}
    <link rel="stylesheet" href="{{ asset($style_path) }}">
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

    {{-- メニューバー --}}
    {{ $menu }}

    {{-- ここにコンテンツが表示される --}}
    {{ $slot }}

    {{-- メニューバー --}}
    {{ $menu }}

    {{-- ボタン --}}
    {{ $button }}

    {{-- BGM --}}
    <audio id="audio" src="{{ asset($audio_path) }}" preload="auto" loop></audio>
    <script>
        window.onload = function() {
            setTimeout(function() {
                var audio = document.getElementById("audio");
                audio.play();
            }, {{ $delay }});
        };
    </script>
</body>

</html>
