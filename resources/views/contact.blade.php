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

        /* border-collapse: separate;
        border-spacing: 2rem; */
    }

    td {
        padding: 1rem 0;
    }


    th {
        text-align: start;
        vertical-align: top;
        padding-top: 1.5rem;
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

    .btn {
        background-color: var(--color-main);
        color: var(--color-base);
        padding: 1rem 2rem;
        width: 200px;
        border-radius: 0.5rem;
    }

    .textarea {
        height: 10em;
    }
</style>

<body>
    <main>
        <div class="contact">
            <h1 class="text-center title">お問い合わせ</h1>
            <form>
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
