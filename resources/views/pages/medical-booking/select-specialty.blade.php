
@extends('layout')
@push('styles')
    <link rel="stylesheet" href="./assets/css/select-specialty.css" />
@endpush
@section('contents')
<div class="container select-pecialty">
    <div id="specialty">  
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
                        <a>Chọn chuyên khoa</a>
                    </span>
                </li>
                <div id="last"></div>
            </ul>
        </div>
        <div class="container-content">
            <div class="hospital-address">
                <div class="title-row1">
                    <span>Thông tin cơ sở y tế</span>
                </div>
                <div class="content-hospital">
                    <ul>
                        <li>
                            <span class="row-1">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M544 96H416V32c0-17.7-14.3-32-32-32H192c-17.7 0-32 14.3-32 32v64H32c-17.7 0-32 14.3-32 32v368c0 8.8 7.2 16 16 16h544c8.8 0 16-7.2 16-16V128c0-17.7-14.3-32-32-32zM160 436c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-128c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm160 128c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-128c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm16-170c0 3.3-2.7 6-6 6h-26v26c0 3.3-2.7 6-6 6h-20c-3.3 0-6-2.7-6-6v-26h-26c-3.3 0-6-2.7-6-6v-20c0-3.3 2.7-6 6-6h26V86c0-3.3 2.7-6 6-6h20c3.3 0 6 2.7 6 6v26h26c3.3 0 6 2.7 6 6v20zm144 298c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-128c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40z"></path>
                                </svg>
                            </span>
                            <div class="row-2">
                                <p class="styles_hospitalName__KNM19">Bệnh viện Da Liễu TP.HCM
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" ariaHidden="true" color="#0097FF" height="16" width="16" xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 151, 255);">
                                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"></path>
                                    </svg>
                                </p>
                                <p class="content-address">2 Nguyễn Thông, Phường Võ Thị Sáu, Quận 3, TP.HCM</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content-Select-specialty">
                <div class="title-row2">
                    <span>
                        <div class="styles_animationTop__2p2gr styles_infoBookingTitle__1MICA" style="animation-duration: 0s; animation-delay: 0s; animation-fill-mode: forwards;">
                            <span>Vui lòng chọn chuyên khoa</span>
                        </div>
                    </span>
                </div> 

                <div class="content-select">
                    <span class="search">
                        <input placeholder="Tìm nhanh chuyên khoa" class="ant-input ant-input-lg" type="text" value="">
                        <span class="ant-input-suffix">
                            <span role="img" aria-label="close-circle" class="anticon anticon-close-circle">
                                <svg viewBox="64 64 896 896" focusable="false" data-icon="close-circle" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm165.4 618.2l-66-.3L512 563.4l-99.3 118.4-66.1.3c-4.4 0-8-3.5-8-8 0-1.9.7-3.7 1.9-5.2l130.1-155L340.5 359a8.32 8.32 0 01-1.9-5.2c0-4.4 3.6-8 8-8l66.1.3L512 464.6l99.3-118.4 66-.3c4.4 0 8 3.5 8 8 0 1.9-.7 3.7-1.9 5.2L553.5 514l130 155c1.2 1.5 1.9 3.3 1.9 5.2 0 4.4-3.6 8-8 8z"></path></svg>
                            </span>
                        </span>
                    </span>
                    <span class="ant-input-group-addon">
                        <button type="button" class="ant-btn ant-btn-default ant-btn-lg ant-btn-icon-only ant-input-search-button">
                            <span role="img" aria-label="search" class="anticon anticon-search">
                                <svg viewBox="64 64 896 896" focusable="false" data-icon="search" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0011.6 0l43.6-43.5a8.2 8.2 0 000-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z"></path></svg>    
                            </span>
                        </button>
                    </span>
                </div>


                <div class="item-content">
                    <a href="/select-service" class="item-select-link">
                        <div class="item-select">
                            <span class="styles_itemName__PRVdJ">Khám nhi (Đặt Khám)</span>
                            <span class="styles_itemNote__bYX3S">
                                <div>(Chỉ dành cho bệnh nhân từ 6 tuổi trở xuống. Khám từ Thứ 2 đến Chủ Nhật.)</div>
                            </span>
                        </div>
                    </a>
                    <a href="/make-an-appointment" class="item-select-link">
                        <div class="item-select">
                            <span class="styles_itemName__PRVdJ">Khám bệnh ngoài da (Đặt lịch Khám)</span>
                            <span class="styles_itemNote__bYX3S">
                            <div>(Chỉ dành cho bệnh nhân trên 6 tuổi.)</div></span>
                        </div>
                    </a>

                    <div class="item-select">
                        <span class="styles_itemName__PRVdJ">Khám và tư vấn Thẩm mỹ da</span>
                        <span class="styles_itemNote__bYX3S">
                        <div>(Điều trị những vấn đề liên quan sắc tố da, muốn làm da đều màu / Mong muốn làm da đẹp hơn / Điều trị trũng mắt, má hóp, mặt lệch - không cân xứng / Điều trị các nếp nhăn (trán, đuôi mắt, cau mày, ...), cười hở lợi, thon gọn cơ cắn / Các vấn đề liên quan đến thẩm mỹ của da)</div></span>
                    </div>

                    <div class="item-select">
                        <span class="styles_itemName__PRVdJ">Khám và tư vấn tạo hình Thẩm mỹ</span>
                        <span class="styles_itemNote__bYX3S">
                        <div>(Hút mỡ / Điều chỉnh cấu trúc (sửa/hạ/nâng) đối với mũi, mắt, mi, gò má, cằm, ngực,...)</div></span>
                    </div>

                    <div class="item-select">
                        <span class="styles_itemName__PRVdJ">Khám bệnh lây truyền qua đường tình dục - Phụ khoa</span>
                        <span class="styles_itemNote__bYX3S">
                        <div>(Triệu chứng: Tất cả các bệnh liên quan đến cơ quan sinh dục nữ / Khám bệnh phụ khoa/hoa liễu / Khám tổng quát các bệnh lây qua tình dục / Xét nghiệm tổng quát các bệnh lây qua tình dục..)</div></span>
                    </div>

                    <div class="item-select">
                        <span class="styles_itemName__PRVdJ">Khám bệnh lây truyền qua đường tình dục - Nam khoa</span>
                        <span class="styles_itemNote__bYX3S">
                        <div>(Triệu chứng: Tất cả triệu chứng liên quan đến cơ quan sinh dục nam / Khám nam khoa/hoa liễu / Khám tổng quát các bệnh lây qua tình dục / Xét nghiệm tổng quát các bệnh lây qua tình dục...)</div></span>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
    @endsection
@push('scripts')
@endpush