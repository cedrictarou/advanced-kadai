<x-admin>
    <main>
        <div class="container admin">
            <h1 class="title mb-5">管理システム</h1>

            {{-- search --}}
            <x-search />

            {{-- page nation --}}
            @if ($contacts)
                <x-pagination />
            @endif

            {{-- result --}}
            @if ($contacts)
                <x-result :contacts=$contacts />
            @endif
        </div>
    </main>
</x-admin>
