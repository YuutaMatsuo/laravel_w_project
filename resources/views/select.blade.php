<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>W</title>
</head>

<body>
    <h2>▼遊ぶ人数をえらんでね！！</h2>
    <br>
    <a href="/input/1"> <img src="{{ asset('storage/images/B_hitori.jpg') }}" width="189"
            height="96" alt="1人で遊ぶ"></a>
    <a href="/input/2"> <img src="{{ asset('storage/images/B_hutari.jpg') }}" width="189"
            height="96" alt="2人で遊ぶ"></a>
    <br>
    <br>
    <a href="/input/3"> <img src="{{ asset('storage/images/B_sannin.jpg') }}" width="189"
            height="96" alt="3人で遊ぶ"></a>
    <a href="/input/4"> <img src="{{ asset('storage/images/B_yonin.jpg') }}" width="189"
            height="96" alt="4人で遊ぶ"></a>
    <br>
    <br>
    <p>
        <font size="2">2人以上で遊ぶ場合は入力が完了したら次の人にバトンタッチしてね！</font>
    </p>
    <input class="button" type="button" value="TOP画面に戻る" onclick="location.href = '/'">
    <br>
    <br>
</body>

</html>
