@extends('layouts')

@section('title', 'ありがとうございました。')

@section('pageCss')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <section class="thanks">
            <h1 class="title">ご意見いただきありがとうございました。</h1>
            <div class="text-center mt-20">
                <a class="btn" href="{{ route('form.index') }}">トップへ戻る</a>
            </div>
        </section>
    </main>
@endsection
