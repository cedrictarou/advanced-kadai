@extends('layouts')

@section('title', '管理システム')

@section('pageCss')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('pageJs')
    <script src="{{ mix('js/admin.js') }}" defer></script>
@endsection

@section('content')
    <main>
        <section class="admin">
            <h1 class="title mb-5">管理システム</h1>
            <div class="search mb-10">
                {{-- search --}}
                <x-search />
            </div>


            {{-- page nation --}}
            @if ($contacts)
                <x-pagination :contacts=$contacts />
            @endif

            {{-- result --}}
            @if ($contacts)
                <x-result :contacts=$contacts />
            @endif
        </section>
    </main>
@endsection
