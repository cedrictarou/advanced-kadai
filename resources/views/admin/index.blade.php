<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    <title>Admin page</title>
</head>
<style>
    .admin {
        width: 80%;
        margin: 0 auto;
    }

    .search {
        border: .1rem solid var(--color-main);
        padding: 3rem 5rem;
    }

    .search__label {
        width: 15rem;
        font-weight: 600;
    }

    .search__label--short {
        width: 5rem;
        font-weight: 600;
    }

    .search__input {
        width: 25rem !important;
    }

    .row {
        display: flex;
        align-items: center;
        margin-bottom: 2rem;
    }

    .page-nation {
        display: flex;
        justify-content: space-between;
    }

    .result__table {
        width: 100%;
        text-align: center;
    }

    thead {
        border-bottom: 2px solid var(--color-main);
    }

    th {
        padding: 1rem 1rem;
    }

    td {
        min-width: 100px;
        padding: 1rem 0;
    }
</style>

<body>
    <main>
        <div class="container admin">
            <h1 class="title mb-5">管理システム</h1>

            {{-- search --}}
            <div class="search mb-10">
                <form action="/">
                    <div class="row">
                        <div class="flex items-center">
                            <span class="search__label">お名前</span>
                            <input class="search__input" type="text">
                        </div>
                        <div class="flex items-center ml-12">
                            <span class="search__label--short">性別</span>
                            <div class="flex">
                                <input id="all" type="radio" name="gender" value=0 checked>
                                <label class="radio-btn" for="all">全て</label>
                                <input id="man" type="radio" name="gender" value=1>
                                <label class="radio-btn" for="man">男性</label>
                                <input id="woman" type="radio" name="gender" value=2>
                                <label class="radio-btn" for="woman">女性</label>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <span class="search__label">登録日</span>
                        <div class="flex gap-5 items-center">
                            <input class="search__input" type="date">
                            <span>~</span>
                            <input class="search__input" type="date">
                        </div>
                    </div>
                    <div class="row">
                        <span class="search__label">メールアドレス</span>
                        <input class="search__input" type="email">
                    </div>
                    <div class="text-center mb-5">
                        <button class="btn">検索</button>
                    </div>
                    <div class="text-center">
                        <a class="link">リセット</a>
                    </div>
                </form>
            </div>

            {{-- page nation --}}
            <div class="page-nation mb-10">
                <div>
                    全
                    <span>35</span>
                    件中
                    <span>11</span>
                    ~
                    <span>20</span>
                    件
                </div>
                <div>
                    ページネーション
                </div>
            </div>

            {{-- result --}}
            <div class="result">
                <table class="result__table">
                    <thead>
                        <th>ID</th>
                        <th>名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th class="text-start">ご意見</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>山田太郎</td>
                            <td>男性</td>
                            <td>text@email.com</td>
                            <td class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, sint
                                consequuntur?
                            </td>
                            <td><button class="btn btn--small">削除</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>山田太郎</td>
                            <td>男性</td>
                            <td>text@email.com</td>
                            <td class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, sint
                                consequuntur?
                            </td>
                            <td><button class="btn btn--small">削除</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>
