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
    .contact {
        width: 900px;
        margin: 0 auto;
        padding: 60px 0;
    }

    .title {
        text-align: center;
        font-size: 2.5rem;
    }

    .contact__table {
        width: 100%;
        margin-bottom: 2rem;
    }

    td {
        padding: 1rem 0;
    }

    th {
        text-align: start;
        vertical-align: top;
        padding-top: 1.5rem;
        min-width: 200px;
    }

    .btn {
        background-color: var(--color-main);
        color: var(--color-base);
        padding: 1rem 2rem;
        width: 200px;
        border-radius: 0.5rem;
    }
</style>

<body>
    <main>
        <div class="contact container">
            <h1 class="text-center title">内容確認</h1>
            <form method="POST" action="{{ route('confirm') }}">
                @csrf
                <table class="contact__table">
                    <tr>
                        <th>お名前</th>
                        <td>
                            <p>山田<span>&emsp;</span>太郎</p>
                        </td>
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td>
                            男性
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>
                            test@email.com
                        </td>
                    </tr>
                    <tr>
                        <th>郵便番号</th>
                        <td>
                            123-4567
                        </td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td>
                            東京都渋谷区千駄ヶ谷1-2-3
                        </td>
                    </tr>
                    <tr>
                        <th>建物</th>
                        <td>
                            千駄ヶ谷マンション101
                        </td>
                    </tr>
                    <tr>
                        <th>ご意見</th>
                        <td>
                            いつもお世話になっております。先日、貴社製品を購入させていただ
                            きました。この度、不具合が生じ、説明書に沿って操作を進めていま
                            したが上手く行きませんでした。どのように直せば良いかご教授いた
                            だきたいです。
                        </td>
                    </tr>
                </table>
                <div class="text-center">
                    <button class="btn" type="submit">送信</button>
                </div>
                <div class="text-center mt-5">
                    <a href="{{ route('contact') }}" class="link">修正する</a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
