@once
    @push('styles')
        <link rel="stylesheet" href="./assets/css/carousels/carousel2.css">
    @endpush
    @push('scripts')
        <script src="./assets/js/carousels/carousel2.js"></script>
    @endpush
    <style>
        {{ $style ?? '' }}
    </style>
@endonce
<div class="banner-advertisement carousel2 relative">
    <div class="swiper">
        <div class="swiper-wrapper">
            @if (!empty($carousels2) && count($carousels2) > 0)
                @foreach ($carousels2 as $carousel2)
                    <div class="swiper-slide">
                        <a href="{{ $carousel2->link ?? '###' }}">
                            <img src="{{ $carousel2->img ?? './assets/imgs/2e284ad2-7fcb-4476-be2f-10b04260ee5d-desktop_banner_trang_chuaa_treaan_desktop.webp' }}"
                                alt="{{ $carousel2->alt ?? ($carousel2->name ?? ($carousel2->title ?? '')) }}">
                        </a>
                    </div>
                @endforeach
            @else
                @for ($i = 1; $i < 8; $i++)
                    <div class="swiper-slide">
                        <a href="###">
                            <img src="./assets/imgs/2e284ad2-7fcb-4476-be2f-10b04260ee5d-desktop_banner_trang_chuaa_treaan_desktop.webp"
                                alt="">
                        </a>
                    </div>
                @endfor
            @endif
        </div>
    </div>
    <x-paginatiom-swiper />
</div>
