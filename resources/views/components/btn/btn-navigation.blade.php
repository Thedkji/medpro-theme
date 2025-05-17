    @push('styles')
        <link rel="stylesheet" href="./assets/css/btn/btn-navigation.css">
    @endpush
    @push('scripts')
        <script src="./assets/js/btn/btn-navigation.js"></script>
    @endpush
    <div class="btn-navigation">
        @isset($active)
            @foreach ($active as $key => $a)
                <button class="active" data-list="{{ $key }}">{{ $a }}</button>
            @endforeach
        @endisset

        @isset($lists)
            @foreach ($lists as $key => $list)
                <button data-list="{{ $key }}">{{ $list }}</button>
            @endforeach
        @endisset
    </div>
