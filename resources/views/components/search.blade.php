<div class="search mb-10">

    <form action="{{ route('admin.index') }}" method="GET">
        <div class="row">
            <div class="flex items-center">
                <span class="search__label">お名前</span>
                <input class="search__input" type="text" name="fullname"
                    value="{{ old('fullname', session('search_query.fullname')) }}">
            </div>
            <div class="flex items-center ml-12">
                <span class="search__label--short">性別</span>
                <div class="flex">
                    <input id="all" type="radio" name="gender" value=0
                        {{ old('gender', session('search_query.gender')) == 0 || null ? 'checked' : '' }}>
                    <label class="radio-btn" for="all">全て</label>
                    <input id="man" type="radio" name="gender" value=1
                        {{ old('gender', session('search_query.gender')) == 1 ? 'checked' : '' }}>
                    <label class="radio-btn" for="man">男性</label>
                    <input id="woman" type="radio" name="gender" value=2
                        {{ old('gender', session('search_query.gender')) == 2 ? 'checked' : '' }}>
                    <label class="radio-btn" for="woman">女性</label>
                </div>

            </div>
        </div>
        <div class="row">
            <span class="search__label">登録日</span>
            <div class="flex gap-5 items-center">
                <input class="search__input" type="date" name="start_date"
                    value="{{ old('start_date', session('search_query.start_date')) }}">
                <span>~</span>
                <input class="search__input" type="date" name="end_date"
                    value="{{ old('end_date', session('search_query.end_date')) }}">
            </div>
        </div>
        <div class="row">
            <span class="search__label">メールアドレス</span>
            <input class="search__input" type="email" name="email"
                value="{{ old('email', session('search_query.email')) }}">
        </div>
        <div class="text-center mb-5">
            <button class="btn">検索</button>
        </div>
        <div class="text-center">
            <a class="link" href="{{ route('admin.index') }}">リセット</a>
        </div>
    </form>
</div>
