<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>

</header>
<main>
    <div class="select">
        <h1>[非公式]ポケモンクイズ管理者</h1>
       
        <form action="{{route('insert')}}" method="post">
        @csrf
            <div class="box">
                <label>
                    <input type="radio" name="generation" value="1">
                    <span>第1世代</span>
                </label>
                <label>
                    <input type="radio" name="generation" value="2">
                    <span>第2世代</span>
                </label>
                <label>
                    <input type="radio" name="generation" value="3">
                    <span>第3世代</span>
                </label>
                <label>
                    <input type="radio" name="generation" value="4">
                    <span>第4世代</span>
                </label>
                <label>
                    <input type="radio" name="generation" value="5">
                    <span>第5世代</span>
                </label>
                <label>
                    <input type="radio" name="generation" value="6">
                    <span>第6世代</span>
                </label>
                <label>
                    <input type="radio" name="generation" value="7">
                    <span>第7世代</span>
                </label>
                <label>
                    <input type="radio" name="generation" value="8">
                    <span>第8世代</span>
                </label>
                <label>
                    <input type="radio" name="generation" value="9" checked>
                    <span>第9世代</span>
                </label>
            </div>
            <dl>
                <dt>問題を入力してください</dt>
                <dd><input type="text" size="60" name="problem"></dd>
            </dl>
            <dl>
                <dt>選択1を入力してください</dt>
                <dd><input type="text" size="60" name="Choice_1"></dd>
            </dl>
            <dl>
                <dt>選択2を入力してください</dt>
                <dd><input type="text" size="60" name="Choice_2"></dd>
            </dl>
            <dl>
                <dt>選択3を入力してください</dt>
                <dd><input type="text" size="60" name="Choice_3"></dd>
            </dl>
            <dl>
                <dt>選択4を入力してください</dt>
                <dd><input type="text" size="60" name="Choice_4"></dd>
            </dl>
            <dl>
                <dt>正解の番号を入力してください</dt>
                <dd><input type="text" size="60" name="correct"></dd>
            </dl>
            <dl>
                <dt>正解の解説を入力してください</dt>
                <dd><input type="text" size="60" name="explanation"></dd>
            </dl>
            <button type="submit" class="select_form">登録開始</button>
        </form>
    </div>
</main>
<br>
<a href="{{ route('index') }}">ホーム</a>
<footer>

</footer>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/Checkbox.js') }}"></script>
</body>
</html>


