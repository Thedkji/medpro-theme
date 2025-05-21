@once
    @push('styles')
        <link rel="stylesheet" href="./assets/css/carousels/carousel6.css">
    @endpush
    @push('scripts')
        <script src="./assets/js/carousels/carousel6.js"></script>
        <script src="./assets/js/btn/btn-navigation.js"></script>
    @endpush
@endonce
<div class="container-item2 carousel6 container relative">
    <x-title.title2 :title="$titleC" />
    {{-- <x-btn.btn-navigation :active="[
        'suckhoe' => 'Sức khỏe',
        ]" :lists="[
            'xetnghiem' => 'Xét nghiệm',
            'tiemchung' => 'Tiêm chủng',
            ]" /> --}}

    {{-- active là mục để đánh dấu khi xuất hiện button nào sẽ dc active đầu , còn list là danh sách các button đằng sau --}}
    <x-btn.btn-navigation :active="$active ?? []" :lists="$list ?? []" />
    @if (!empty($carousels6) && count($carousels6) > 0)
        @foreach ($carousels6 as $page)
            <div class="list-navigation {{ $page->name ?? '' }} {{ ($page->active ?? '') === 'yes' ? '' : 'none' }}">
                <div class="content-container  swiper m-content">
                    <div class="swiper-wrapper" id="swiper-wrapper-d4696beef0e0f8fe" aria-live="polite">
                        @foreach ($page->slides ?? [] as $slide)
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 5">
                                <div class="content-item">
                                    <a href="{{ $slide->link ?? '###' }}">
                                        <div class="img">
                                            <img src="{{ $slide->img ?? './assets/imgs/0478ff2f-00fd-478a-a52f-49396cf6ac75-bs_traaoan_thaaa_oanh.webp' }}"
                                                alt="{{ $slide->alt ?? ($slide->name ?? ($slide->title ?? '')) }}">
                                        </div>

                                        <div class="content">
                                            <div class="title">
                                                <h2>{{ $slide->title ?? 'Trần Thị Oanh - BV Hùng Vương' }}</h2>
                                            </div>

                                            <div class="sub-content">
                                                @foreach ($slide->subContent as $content)
                                                    <div>
                                                        <img src="{{ $content->img ?? './assets/imgs/hospital.svg' }}"
                                                            alt="">
                                                        <span>
                                                            {{ $content->title ?? 'Trung Tâm Nội Soi Tiêu Hoá Doctor Check' }}
                                                            @if ($content->icon ?? '')
                                                                {{ $content->icon }}
                                                            @else
                                                                <svg stroke="currentColor" fill="currentColor"
                                                                    stroke-width="0" viewBox="0 0 24 24"
                                                                    ariaHidden="true" color="#0097FF" height="18"
                                                                    width="18" xmlns="http://www.w3.org/2000/svg"
                                                                    style="color: rgb(0, 151, 255);">
                                                                    <path fill-rule="evenodd"
                                                                        d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                            @endif
                                                        </span>
                                                    </div>
                                                @endforeach
                                            </div>

                                            <x-btn.btn1 :content="$slide->btn ?? 'Đặt khám ngay'" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>

                <x-navigation-swiper />
            </div>
        @endforeach
        <x-btn.view-all content="Xem tất cả" />
    @else
        <div class="list-navigation suckhoe">
            <div class="content-container  swiper m-content">
                <div class="swiper-wrapper" id="swiper-wrapper-d4696beef0e0f8fe" aria-live="polite">
                    @for ($i = 1; $i < 10; $i++)
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 5"
                            style="width: 275.25px; margin-right: 20px;">
                            <div class="content-item">
                                <a href="###">
                                    <div class="img">
                                        <img src="./assets/imgs/bc9584b2-9fe4-4dde-816d-3de4a012249c-gaai_khaam_chuyaaan_saacentu_-_haanh_aaoapoundnh_(banner_section)_277x150_px.webp"
                                            alt="">
                                    </div>

                                    <div class="content">
                                        <div class="title">
                                            <h2>Trần Thị Oanh - BV Hùng Vương</h2>
                                        </div>

                                        <div class="sub-content">
                                            <div>
                                                <img src="./assets/imgs/hospital.svg" alt="">
                                                <span>
                                                    Trung Tâm Nội Soi Tiêu Hoá Doctor Check
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 24 24" ariaHidden="true" color="#0097FF"
                                                        height="18" width="18" xmlns="http://www.w3.org/2000/svg"
                                                        style="color: rgb(0, 151, 255);">
                                                        <path fill-rule="evenodd"
                                                            d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div>
                                                <img src="./assets/imgs/dollar.svg" alt="">
                                                <span class="color-tertiary">150.000đ</span>
                                            </div>
                                        </div>

                                        <x-btn.btn1 content="Đặt khám ngay" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>

            <x-navigation-swiper />
            <x-btn.view-all content="Xem tất cả" />
        </div>

        <div class="list-navigation xetnghiem none">
            <div class="content-container  swiper m-content">
                <div class="swiper-wrapper" id="swiper-wrapper-d4696beef0e0f8fe" aria-live="polite">
                    @for ($i = 1; $i < 7; $i++)
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 5"
                            style="width: 275.25px; margin-right: 20px;">
                            <div class="content-item">
                                <a href="###">
                                    <div class="img">
                                        <img src="./assets/imgs/bc9584b2-9fe4-4dde-816d-3de4a012249c-gaai_khaam_chuyaaan_saacentu_-_haanh_aaoapoundnh_(banner_section)_277x150_px.webp"
                                            alt="">
                                    </div>

                                    <div class="content">
                                        <div class="title">
                                            <h2>Trần Thị Oanh - BV Hùng Vương</h2>
                                        </div>

                                        <div class="sub-content">
                                            <div>
                                                <img src="./assets/imgs/hospital.svg" alt="">
                                                <span>
                                                    Trung Tâm Nội Soi Tiêu Hoá Doctor Check
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 24 24" ariaHidden="true" color="#0097FF"
                                                        height="18" width="18"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="color: rgb(0, 151, 255);">
                                                        <path fill-rule="evenodd"
                                                            d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div>
                                                <img src="./assets/imgs/dollar.svg" alt="">
                                                <span class="color-tertiary">150.000đ</span>
                                            </div>
                                        </div>

                                        <x-btn.btn1 content="Đặt khám ngay" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>

            <x-navigation-swiper />
            <x-btn.view-all content="Xem tất cả" />
        </div>
    @endif
</div>
