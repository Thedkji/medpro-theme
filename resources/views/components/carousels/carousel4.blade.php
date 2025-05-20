@once
    @push('styles')
        <link rel="stylesheet" href="./assets/css/carousels/carousel4.css">
    @endpush
    @push('scripts')
        <script src="./assets/js/carousels/carousel4.js"></script>
    @endpush
    <style>
        {{ $style ?? '' }}
    </style>
@endonce
<div class="banner-advertisement2 carousel4 relative">
    <div class="swiper">
        <div class="swiper-wrapper">
            @if (!empty($carousels4) && count($carousels4) > 0)
                @foreach ($carousels4 as $carousel4)
                    <div class="swiper-slide">
                        <a href="{{ $carousel4->link ?? '###' }}">
                            <img src="{{ $carousel4->img ?? './assets/imgs/ad7081b8-cfa0-40e8-b0d3-aeb2e9632e5b-desktop_-_banner_duoi.webp' }}"
                                alt="{{ $carousel4->alt ?? ($carousel4->name ?? ($carousel4->title ?? '')) }}">
                        </a>
                    </div>
                @endforeach
            @else
                @for ($i = 1; $i < 8; $i++)
                    <div class="swiper-slide">
                        <a href="###">
                            <img src="./assets/imgs/ad7081b8-cfa0-40e8-b0d3-aeb2e9632e5b-desktop_-_banner_duoi.webp"
                                alt="">
                        </a>
                    </div>
                @endfor
            @endif
        </div>
    </div>
    <x-paginatiom-swiper />
</div>
