@once
    @push('styles')
        <link rel="stylesheet" href="./assets/css/lists/list1.css">
    @endpush

    <style>
        {{ $style ?? '' }}
    </style>
@endonce
<div class="home list1 relative">
    <x-title.title2 :title="$titleC" />

    <div class="list-container">
        {{-- Nếu ko truyền biến lists1 -> nhảy vào else và in ra dữ liệu demo --}}
        @if (!empty($lists1) && count($lists1) > 0)
            @foreach ($lists1 ?? [] as $list1)
                <a href="###">
                    <div class="list-item">
                        <div class="img">
                            <img src="{{ $list1->img ?? './assets/imgs/ChuyenKhoa.webp' }}"
                                alt="{{ $list1->alt ?? $list1->name ?? $list1->title ?? '' }}">
                        </div>
                        <div class="title">
                            {{ $list1->title ?? 'Chuyên khoa' }}
                        </div>
                    </div>
                </a>
            @endforeach
        @else
            {{-- Dư liệu demo --}}
            @for ($i = 1; $i < 17; $i++)
                <a href="###">
                    <div class="list-item">
                        <div class="img">
                            <img src="./assets/imgs/{{ $img ?? 'ChuyenKhoa.webp' }}" alt="">
                        </div>
                        <div class="title">
                            {{ $title ?? 'Chuyên khoa' }}
                        </div>
                    </div>
                </a>
            @endfor
        @endif
    </div>
    <x-btn.view-all :content="$viewAll ?? 'Xem tất cả'" />
</div>
