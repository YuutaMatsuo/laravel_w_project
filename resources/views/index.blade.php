<x-layout>
    {{-- cssのパス --}}
    <x-slot name='style_path'>
        /css/style.css
    </x-slot>

    {{-- audioファイルのパス --}}
    <x-slot name='audio_path'>
        /storage/audio/top.mp3
    </x-slot>

    {{-- ディレイ秒数 --}}
    <x-slot name='delay'>
        10000
    </x-slot>

    {{-- メニューバー ※空欄 --}}
    <x-slot name='menu'>
    </x-slot>

    {{-- トップへ戻るボタン ※空欄 --}}
    <x-slot name='button'>
    </x-slot>

    <img src="{{ asset('storage/images/aikon.PNG') }}" alt="W"> <br><br>
    <input type="button" value="Wをはじめる" class="menu_button" onclick="location.href = '/select'"><br> <br>
    <input type="button" value="みんなのW" class="menu_button"
        onclick="location.href = '{{ route('greatW.latest') }}'"><br> <br>
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
</x-layout>
