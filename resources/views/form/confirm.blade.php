@extends('layouts')

@section('title', '確認ページ')

@section('pageCss')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <section class="confirm">
            <h1 class="title mb-5">内容確認</h1>
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
                            {{ intVal($input['gender']) === 1 ? '男性' : '女性' }}
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
                        <th class="building">建物</th>
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
        </section>
    </main>
@endsection
