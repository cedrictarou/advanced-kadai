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
        width: 100%;
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
            <form method="POST" action="{{ route('form.confirm') }}">
                @csrf
                <table class="contact__table">
                    <tr>
                        <th>お名前</th>
                        <td>
                            <p>{{ $input['last_name'] }}<span>&emsp;</span>{{ $input['first_name'] }}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td>
                            {{ $input['gender'] === 1 ? '男性' : '女性' }}
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>
                            {{ $input['email'] }}
                        </td>
                    </tr>
                    <tr>
                        <th>郵便番号</th>
                        <td>
                            {{ $input['postcode'] }}
                        </td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td>
                            {{ $input['address'] }}
                        </td>
                    </tr>
                    <tr>
                        <th>建物</th>
                        <td>
                            {{ $input['building_name'] }}
                        </td>
                    </tr>
                    <tr>
                        <th>ご意見</th>
                        <td>
                            {{ $input['opinion'] }}
                        </td>
                    </tr>
                </table>
                <div class="text-center">
                    <button class="btn" type="submit">送信</button>
                </div>
                <div class="text-center mt-5">
                    <button href="{{ route('form.index') }}" class="link" name="back" type="submit">修正する</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
