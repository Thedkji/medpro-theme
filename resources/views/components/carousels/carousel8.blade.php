@once
    @push('styles')
        <link rel="stylesheet" href="./assets/css/carousels/carousel8.css">
    @endpush
    @push('scripts')
        <script src="./assets/js/carousels/carousel8.js"></script>
    @endpush
@endonce
<div class="swiper-container carousel8 container relative">
    <div class="swiper">
        <div class="swiper-wrapper">
            @if (!empty($carousels8) && count($carousels8) > 0)
                @foreach ($carousels8 as $carousel8)
                    <div class="swiper-slide">
                        <a href="{{ $carousel8->link ?? '/medical-booking' }}">
                            <img src="{{ $carousel8->img ?? './assets/imgs/af579b7d-d040-436e-992a-0bb9c6374785-dat-kham-tai-co-so.webp' }}"
                                alt="{{ $carousel8->alt ?? ($carousel8->name ?? ($carousel8->title ?? '')) }}">
                            <span>{{ $carousel8->title ?? 'Đặt khám tại cơ sở' }}</span>
                        </a>
                    </div>
                @endforeach
            @else
                @for ($i = 1; $i < 10; $i++)
                    <div class="swiper-slide">
                        <a href="/medical-booking">
                            <img src="./assets/imgs/af579b7d-d040-436e-992a-0bb9c6374785-dat-kham-tai-co-so.webp"
                                alt="">
                            <span>Đặt khám tại cơ sở</span>
                        </a>
                    </div>
                @endfor
            @endif
        </div>
    </div>

    <x-navigation-swiper />
</div>
