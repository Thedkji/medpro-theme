@once
    @push('styles')
        <link rel="stylesheet" href="./assets/css/lists/list3.css">
    @endpush

    <style>
        {{ $style ?? '' }}
    </style>
@endonce
<div class="home list3">
    <x-title.title2 :title="$titleC" />

    <div class="list-container">
        @if (!empty($lists3) && count($lists3) > 0)
            @foreach ($lists3 as $list3)
                <div class="list-item">
                    <div class="img">
                        <img src="{{ $list3->img ?? '' }}" alt="{{ $list3->alt ?? $list3->name ?? $list3->title ?? '' }}">
                    </div>
                    <div class="content">
                        <div class="title">{{ $list3->title ?? '3.0M+' }}</div>
                        <span>{{ $list3->content ?? 'Lượt khám' }}</span>
                    </div>
                </div>
            @endforeach
        @else
            @for ($i = 1; $i < 7; $i++)
                <div class="list-item">
                    <div class="img">
                        <img src="./assets/imgs/2b42e50c-ad0f-4dcb-a45f-8e3c16f1e093-luotdatkham.webp" alt="">
                    </div>
                    <div class="content">
                        <div class="title">3.0M+</div>
                        <span>Lượt khám</span>
                    </div>
                </div>
            @endfor
        @endif

    </div>
</div>
