@once
    @push('styles')
        <link rel="stylesheet" href="./assets/css/carousels/carousel7.css">
    @endpush
    @push('scripts')
        <script src="./assets/js/carousels/carousel7.js"></script>
    @endpush
@endonce
<div class="carousel7 container relative">
    <x-title.title2 :title="$titleC" />

    <div class="swiper">
        <div class="swiper-wrapper">
            @if (!empty($carousels7) && count($carousels7) > 0)
                @foreach ($carousels7 as $carousel7)
                    <div class="swiper-slide">
                        <div>
                            <div class="img">
                                <img src="{{ $carousel7->imgHeader ?? './assets/imgs/Icon.svg' }}"
                                    alt="{{ $carousel7->alt ?? ($carousel7->name ?? ($carousel7->title ?? '')) }}">
                                <div>
                                    <span>
                                        {{ $carousel7->content ?? '' }}
                                    </span>
                                </div>
                            </div>
                            <div class="content">
                                <img src="{{ $carousel7->avatar ?? './assets/imgs/d86082a5-b561-4904-a6c5-0122d8965ba9-nhan-nguyen.webp' }}"
                                    alt="">
                                <div class="name">
                                    <span>{{ $carousel7->avatarName ?? 'Nhân Nguyễn' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                @for ($i = 1; $i < 10; $i++)
                    <div class="swiper-slide">
                        <div>
                            <div class="img">
                                <img src="./assets/imgs/Icon.svg" alt="">
                                <div>
                                    <span>
                                        Đặt lịch xét nghiệm bên này rất gọn, có ngày giờ cụ thể luôn lên là được xét
                                        nghiệm
                                        liền
                                        không rườm rà gì mấy. An tâm đặt cho gia đình, có cả xét nghiệm tận nhà, không
                                        mất
                                        thời
                                        gian.
                                        không rườm rà gì mấy. An tâm đặt cho gia đình, có cả xét nghiệm tận nhà, không
                                        mất
                                        thời
                                        gian.
                                        không rườm rà gì mấy. An tâm đặt cho gia đình, có cả xét nghiệm tận nhà, không
                                        mất
                                        thời
                                        gian.
                                        không rườm rà gì mấy. An tâm đặt cho gia đình, có cả xét nghiệm tận nhà, không
                                        mất
                                        thời
                                        gian.
                                    </span>
                                </div>
                            </div>
                            <div class="content">
                                <img src="./assets/imgs/d86082a5-b561-4904-a6c5-0122d8965ba9-nhan-nguyen.webp"
                                    alt="">
                                <div class="name">
                                    <span>Nhân Nguyễn</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            @endif
        </div>
    </div>

    @include('components.navigation-swiper')
</div>
