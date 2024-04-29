<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>人数入力テスト</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
    <h2>選択された人数は{{ $playerCnt }}人です</h2><br>
    <input class="button" type="button" value="TOP画面に戻る" onclick="location.href = '/'">
</body>
</html>
