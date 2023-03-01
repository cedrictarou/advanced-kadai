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

    th:not(.building)::after {
        display: inline-block;
        content: "※";
        color: red;
        margin-left: .5rem;
        transform: translateY(-.2rem)
    }

    .eg {
        color: var(--color-accent);
        margin-left: 2rem;
        margin-top: 1rem;
    }

    .textarea {
        height: 10em;
    }

    input[type="radio"] {
        display: none;
    }

    .radio-btn {
        cursor: pointer;
        display: block;
        padding-left: 5rem;
        position: relative;
        width: auto;
        color: var(--color-accent);
    }

    .radio-btn::before {
        background: var(--color-bace);
        border: 1px solid var(--color-accent);
        border-radius: 50%;
        content: '';
        display: block;
        position: absolute;
        top: 50%;
        left: 30%;
        transform: translate(-50%, -50%);
        width: 3rem;
        height: 3rem;
    }

    .radio-btn::after {
        background: var(--color-accent);
        border-radius: 50%;
        content: '';
        display: block;
        height: 1.2rem;
        width: 1.2rem;
        left: 1rem;
        top: 50%;
        left: 30%;
        transform: translate(-50%, -50%);
        opacity: 0;
        position: absolute;
    }

    input[type="radio"]:checked+.radio-btn::after {
        opacity: 1;
        background-color: var(--color-main);
        border: 1px solid var(--color-main);
    }

    input[type="radio"]:checked+.radio-btn::before {
        opacity: 1;
        border: 1px solid var(--color-main);
    }

    input[type="radio"]:checked+.radio-btn {
        opacity: 1;
        color: var(--color-main);
    }
</style>

<body>
    <main>
        <div class="contact container">
            <h1 class="text-center title">お問い合わせ</h1>
            <form action="{{ route('contact') }}" method="POST">
                @csrf
                <table class="contact__table">
                    <tr>
                        <th>お名前</th>
                        <td class="columns-2">
                            <div class="w-full">
                                <input class="input" type="text">
                                <p class="eg">例) 山田</p>
                            </div>
                            <div class="w-full">
                                <input class="input" type="text">
                                <p class="eg">例) 太郎</p>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <th>性別</th>
                        <td class="flex gap-10 pb-20">
                            <input class="radio-input" type="radio" name="gender" id="man" value="man"
                                checked />
                            <label class="radio-btn" for="man"> 男性 </label>
                            <input class="radio-input" type="radio" name="gender" id="woman" value="woman" />
                            <label class="radio-btn" for="woman"> 女性 </label>
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>
                            <input class="input" type="email">
                            <p class="eg">例) test@email.com</p>
                        </td>
                    </tr>
                    <tr>
                        <th>郵便番号</th>
                        <td>
                            <div class="flex items-center">
                                <span class="mr-5">&#12306;</span>
                                <input class="input" type="text">
                            </div>
                            <p class="eg">例) 123-4567</p>
                        </td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td>
                            <input class="input" type="text">
                            <p class="eg">例)東京都渋谷区千駄ヶ谷1-2-3</p>
                        </td>
                    </tr>
                    <tr>
                        <th class="building">建物</th>
                        <td>
                            <input class="input" type="text">
                            <p class="eg">例)千駄ヶ谷マンション101</p>
                        </td>
                    </tr>
                    <tr>
                        <th>ご意見</th>
                        <td>
                            <textarea class="textarea"></textarea>
                        </td>
                    </tr>
                </table>
                <div class="text-center">
                    <button class="btn" type="submit">確認</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
