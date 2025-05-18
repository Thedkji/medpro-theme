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
