@extends('layout')
@push('styles')
    <link rel="stylesheet" href="./assets/css/medical-booking.css" />
@endpush
@section('contents')
<div id="">
    <div class="container appointment">
        
        <div class="navigation">
            <ul class="nav-bar">
                <div id="first"></div>
                <li>
                    <a href="/">Trang chủ</a>
                </li>
                <li>
                    <span class="nav-span">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                        </svg>
                        <a>Bệnh viện Da Liễu TP.HCM</a>
                    </span></li><li class="undefined  styles_last__rM2K0">

                    <span class="nav-span">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                        </svg>
                        <a>Hình thức đặt khám</a>
                    </span>
                </li>
                <div id="last"></div>
            </ul>
        </div>
        
        <div class="appointment-form">
            <div class="title-h1">
                <h1 class="name-h1">Các hình thức đặt khám</h1>
                <div class="slogan">Đặt khám nhanh chóng, không phải chờ đợi với nhiều cơ sở y tế trên khắp các tỉnh thành</div>
            </div>
            <div class="content-appointment-form">
                <ul class="item-content">
                    <li class="items-li">
                        <a href="/select-specialty" class="items-link">
                            <div class="items">
                                <figure>
                                    <img src="https://prod-partner.s3-hcm-r1.longvan.net/44f37418-dc8d-4123-b296-9f2c0aae8bc1-djat_kham_theo_chuyen_khoa.png" width="35" height="35" alt="">
                                </figure>
                                <div class="styles_name__pt_wb">Đặt khám</div>
                            </div>
                        </a>
                    </li>
                    <li class="items-li">
                        <a href="/select-specialty" class="items-link">
                            <div class="items">
                                <figure>
                                    <img src="https://cdn.medpro.vn/prod-partner/49fc0a06-804c-47a1-aee5-b365afeaa3b2-ng.png" width="35" height="35" alt="">
                                </figure>
                                <div class="styles_name__pt_wb">Đặt khám ngoài giờ</div>
                            </div>
                        </a>
                    </li>
                    <li class="items-li">
                        <a href="/select-specialty" class="items-link">
                            <div class="items">
                                <figure>
                                    <img src="https://cdn.medpro.vn/prod-partner/7796eaf1-76c0-42e4-82e6-a7e66a1b025b-feature-taaoao_haanh_thaaoa(c)m_maaa.png" width="35" height="35" alt="">
                                </figure>
                                <div class="styles_name__pt_wb">Khám Tạo Hình Thẩm Mỹ</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="button-cancel">
            <button type="button" class="ant-btn ant-btn-text styles_btnBack__IzOr4">
                <span>Quay lại</span>
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="#003553" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path fill="none" d="M0 0h24v24H0z"></path><path d="M8 7v4L2 6l6-5v4h5a8 8 0 1 1 0 16H4v-2h9a6 6 0 1 0 0-12H8z"></path>
                    </g>
                </svg>
            </button>
        </div>

    </div>
</div>
@endsection
@push('scripts')
@endpush
