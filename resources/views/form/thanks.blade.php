<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>advanced kadai</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style>
    .thanks__container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .title {
        text-align: center;
        font-size: 2rem;
    }
</style>

<body>
    <main>
        <div class="thanks__container">
            <h1 class="title">ご意見いただきありがとうございました。</h1>
            <div class="text-center mt-20">
                <a class="btn" href="{{ route('form.index') }}">トップへ戻る</a>
            </div>
        </div>
    </main>
</body>

</html>
