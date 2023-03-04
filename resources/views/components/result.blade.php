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
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact['id'] }}</td>
                    <td>{{ $contact['fullname'] }}</td>
                    <td>{{ $contact['gender'] === 1 ? '男性' : '女性' }}</td>
                    <td>{{ $contact['email'] }}</td>
                    <td class="text-start opinion">{{ $contact['opinion'] }}
                    </td>
                    <td>
                        <form method="POST" action="{{ route('admin.destroy', $contact->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn--small" type="submit">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
