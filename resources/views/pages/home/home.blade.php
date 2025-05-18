@extends('layout')

@push('styles')
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/home/announcement-bar.css">
@endpush

@section('contents')
    <div class="announcement-bar">
        <div class="announcement-bar-content" id="announcementBarContent">
            <span>📢 Đặt ngay Trợ Lý Giúp Việc để người thân luôn được chăm sóc khi đi khám bệnh</span>
            <span>📢 Đặt ngay Trợ Lý Giúp Việc để người thân luôn được chăm sóc khi đi khám bệnh</span>
            <span>📢 Đặt ngay Trợ Lý Giúp Việc để người thân luôn được chăm sóc khi đi khám bệnh</span>
            <span>📢 Đặt ngay Trợ Lý Giúp Việc để người thân luôn được chăm sóc khi đi khám bệnh</span>
        </div>
    </div>


    <div id="home">
        <img src="./assets/imgs/92b6d682-4b5a-4c94-ac54-97a077c0c6c5-homepage_banner.webp" alt="">
        <div class="bannerHome">
            <div class="container">
                <h1>Kết nối Người Dân với Cơ sở & Dịch vụ Y tế hàng đầu</h1>
                <div class="search">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" id="search" x="0px"
                        y="0px" viewBox="0 0 24 24" color="#B1B1B1" height="24" width="24"
                        xmlns="http://www.w3.org/2000/svg" style="color: rgb(177, 177, 177);">
                        <g>
                            <path
                                d="M20.031,20.79c0.46,0.46,1.17-0.25,0.71-0.7l-3.75-3.76c1.27-1.41,2.04-3.27,2.04-5.31
                                                                                                                                                    c0-4.39-3.57-7.96-7.96-7.96s-7.96,3.57-7.96,7.96c0,4.39,3.57,7.96,7.96,7.96c1.98,0,3.81-0.73,5.21-1.94L20.031,20.79z
                                                                                                                                                    M4.11,11.02c0-3.84,3.13-6.96,6.96-6.96c3.84,0,6.96,3.12,6.96,6.96c0,3.84-3.12,6.96-6.96,6.96C7.24,17.98,4.11,14.86,4.11,11.02
                                                                                                                                                    z">
                            </path>
                        </g>
                    </svg>
                    <input type="text" placeholder="Tìm kiếm cơ sở y tế">
                </div>

                <div class="space-item">
                    <ul>
                        <li>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                ariaHidden="true" color="#52c41a" height="18" width="18"
                                xmlns="http://www.w3.org/2000/svg" style="color: rgb(82, 196, 26);">
                                <path fill-rule="evenodd"
                                    d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="truncate-text line-2">Đặt khám nhanh - Lấy số thứ tự trực tuyến - Tư vấn sức khỏe
                                từ xa</span>
                        </li>
                        <li>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                ariaHidden="true" color="#52c41a" height="18" width="18"
                                xmlns="http://www.w3.org/2000/svg" style="color: rgb(82, 196, 26);">
                                <path fill-rule="evenodd"
                                    d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="truncate-text line-2">Đặt khám theo giờ - Đặt càng sớm để có thể có số thứ tự thấp
                                nhất</span>
                        </li>
                        <li>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                ariaHidden="true" color="#52c41a" height="18" width="18"
                                xmlns="http://www.w3.org/2000/svg" style="color: rgb(82, 196, 26);">
                                <path fill-rule="evenodd"
                                    d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="truncate-text line-2">Được hoàn tiền khi hủy khám - Có cơ hội nhận ưu đãi hoàn
                                tiền</span>
                        </li>
                    </ul>
                </div>

                <x-carousels.carousel8/>
            </div>
        </div>

        <div class="m-content"></div>
        <div class="">

            <x-carousels.carousel1 :titleC="'Được tin tưởng hợp tác và đồng hành'" />
        </div>

        <div class="bg-div-content2"></div>
        <div class="bg-content">
            <div class="container">
                <x-carousels.carousel2 />
            </div>
        </div>

        <div class="bg-content">
            <div class="">
                <x-carousels.carousel3 titleC="Cơ sở y tế đặt khám được yêu thích" />
            </div>
        </div>

        <div class="bg-div-content"></div>
        <div class="">
            <div class="container">
                <x-carousels.carousel4 />
            </div>
        </div>
        <div class="bg-div-content2"></div>

        <div class="bg-content">
            <div class="">
                <x-carousels.carousel5 titleC="Bác sĩ TƯ VẤN khám bệnh qua video" />
            </div>
        </div>


        <div class="bg-content">
            <div class="">
                <x-carousels.carousel6 titleC="Chăm sóc sức khỏe toàn diện" />
            </div>
        </div>

        <div class="bg-div-content"></div>
        <div class="">
            <div class="container">
                <x-lists.list1 titleC="Chuyên khoa" />
            </div>
        </div>

        <div class="container">
            <x-contents.content1 titleC="Tải ứng dụng Đặt khám nhanh" spanC="Medpro" />
        </div>

        <div class="">
            <x-carousels.carousel7 titleC="Cảm nhận từ khách hàng" />
        </div>

        <div class="container">
            <x-lists.list2 titleC="Truyền thông nói gì về Medpro"
                subTitleC="Lợi ích của Ứng dụng đặt khám nhanh Medpro đã được ghi nhận rộng rãi" />

            <div class="iframe1">
                <style>
                    .iframe1 {
                        margin-top: 100px
                    }

                    .iframe1 iframe {
                        width: clamp(300px, 50vw, 703px);
                        height: clamp(200px, 30vw, 250px);
                    }
                </style>
                <iframe
                    style="position: relative; left: 50%; transform: translateX(-50%); border-radius:10px ;margin: 10px 0"
                    src="https://www.youtube.com/embed/zfmhCJgWx8Y"
                    title="Ứng dụng Medpro - Đặt khám nhanh tại hơn 50 bệnh viện hàng đầu Việt Nam" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>

        <div class="bg-div-content2"></div>
        <div class="bg-content">
            <div class="container">
                <x-lists.list3 titleC="Thống kê" />
            </div>
        </div>

        <div class="bg-content">
            <div class="container">
                <x-grids.grid1 titleC="Tin tức Y Tế" />
            </div>
        </div>

        <div class="bg-content">
            <div class="container">
                <x-banner-info.banner-info1 />
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="./assets/js/home/announcement-bar.js"></script>
    <script src="./assets/js/home/banner-home/swiper-space-item.js"></script>
    <script src="./assets/js/home/banner-home/text-typing-search.js"></script>
@endpush
