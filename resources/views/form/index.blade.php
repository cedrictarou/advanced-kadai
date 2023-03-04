<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>advanced kadai</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
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

    .alert {
        color: var(--color-alert);
    }
</style>

<body>
    <main>
        <div class="contact container">
            <h1 class="text-center title">お問い合わせ</h1>

            <form action="{{ route('form.index') }}" method="POST">
                @csrf
                <table class="contact__table">
                    <tr>
                        <th>お名前</th>
                        <td class="columns-2">
                            <div class="w-full">
                                <input id="last_name" class="input" type="text" name="last_name"
                                    value="{{ old('last_name') }}">
                                <p class="eg">例) 山田</p>
                                @error('last_name')
                                    <p class="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full">
                                <input id="first_name" class="input" type="text" name="first_name"
                                    value="{{ old('first_name') }}">
                                <p class="eg">例) 太郎</p>
                                @error('first_name')
                                    <p class="alert">{{ $message }}</p>
                                @enderror
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <th>性別</th>
                        <td class="flex gap-10 pb-20">
                            <input class="radio-input" type="radio" name="gender" id="man" value=1
                                {{ old('gender', 1) == 1 ? 'checked' : '' }} />
                            <label class="radio-btn" for="man"> 男性 </label>
                            <input class="radio-input" type="radio" name="gender" id="woman" value=2
                                {{ old('gender') == 2 ? 'checked' : '' }} />
                            <label class="radio-btn" for="woman"> 女性 </label>
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>
                            <input class="input" type="email" name="email" value="{{ old('email') }}">
                            <p class="eg">例) test@email.com</p>
                            @error('email')
                                <p class="alert">{{ $message }}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>郵便番号</th>
                        <td>
                            <div class="flex items-center">
                                <span class="mr-5">&#12306;</span>
                                <input class="input" type="text" name="postcode" value="{{ old('postcode') }}"
                                    id="postcode">
                            </div>
                            <p class="eg">例) 123-4567</p>
                            @error('postcode')
                                <p class="alert">{{ $message }}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td>
                            <input class="input" type="text" name="address" value="{{ old('address') }}"
                                id="address">
                            <p class="eg">例)東京都渋谷区千駄ヶ谷1-2-3</p>
                            @error('address')
                                <p class="alert">{{ $message }}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th class="building">建物</th>
                        <td>
                            <input class="input" type="text" name="building_name"
                                value="{{ old('building_name') }}">
                            <p class="eg">例)千駄ヶ谷マンション101</p>
                            @error('building_name')
                                <p class="alert">{{ $message }}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>ご意見</th>
                        <td>
                            <textarea class="textarea" name="opinion">{{ old('opinion') }}</textarea>
                            @error('opinion')
                                <p class="alert">{{ $message }}</p>
                            @enderror
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
