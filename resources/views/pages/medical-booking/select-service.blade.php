@extends('layout')
@push('styles')
    <link rel="stylesheet" href="./assets/css/select-service.css?v=<?php echo time(); ?>" />
@endpush
@section('contents')  
    <div class="container select-pecialty">
        <div id="service">  
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
                            <a>Chọn dịch vụ</a>
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
                            <li>
                                <span class="styles_icon__4gn5u">
                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none"><svg viewBox="0 0 20 18"><path d="M15.8333 3.27273H13.3333V2.45455C13.3333 1.80356 13.0699 1.17924 12.6011 0.71892C12.1323 0.258603 11.4964 0 10.8333 0H9.16667C8.50363 0 7.86774 0.258603 7.3989 0.71892C6.93006 1.17924 6.66667 1.80356 6.66667 2.45455V3.27273H4.16667C3.062 3.27403 2.00296 3.70545 1.22185 4.47236C0.440735 5.23927 0.00132321 6.27906 0 7.36364L0 13.9091C0.00132321 14.9937 0.440735 16.0335 1.22185 16.8004C2.00296 17.5673 3.062 17.9987 4.16667 18H15.8333C16.938 17.9987 17.997 17.5673 18.7782 16.8004C19.5593 16.0335 19.9987 14.9937 20 13.9091V7.36364C19.9987 6.27906 19.5593 5.23927 18.7782 4.47236C17.997 3.70545 16.938 3.27403 15.8333 3.27273V3.27273ZM8.33333 2.45455C8.33333 2.23755 8.42113 2.02944 8.57741 1.876C8.73369 1.72256 8.94565 1.63636 9.16667 1.63636H10.8333C11.0543 1.63636 11.2663 1.72256 11.4226 1.876C11.5789 2.02944 11.6667 2.23755 11.6667 2.45455V3.27273H8.33333V2.45455ZM12.5 11.4545H10.8333V13.0909C10.8333 13.3079 10.7455 13.516 10.5893 13.6695C10.433 13.8229 10.221 13.9091 10 13.9091C9.77899 13.9091 9.56702 13.8229 9.41074 13.6695C9.25446 13.516 9.16667 13.3079 9.16667 13.0909V11.4545H7.5C7.27899 11.4545 7.06702 11.3683 6.91074 11.2149C6.75446 11.0615 6.66667 10.8534 6.66667 10.6364C6.66667 10.4194 6.75446 10.2113 6.91074 10.0578C7.06702 9.90438 7.27899 9.81818 7.5 9.81818H9.16667V8.18182C9.16667 7.96482 9.25446 7.75672 9.41074 7.60328C9.56702 7.44984 9.77899 7.36364 10 7.36364C10.221 7.36364 10.433 7.44984 10.5893 7.60328C10.7455 7.75672 10.8333 7.96482 10.8333 8.18182V9.81818H12.5C12.721 9.81818 12.933 9.90438 13.0893 10.0578C13.2455 10.2113 13.3333 10.4194 13.3333 10.6364C13.3333 10.8534 13.2455 11.0615 13.0893 11.2149C12.933 11.3683 12.721 11.4545 12.5 11.4545Z"></path></svg></svg>
                                </span>
                                <div class="row-2">
                                    <p class="styles_hospitalName__KNM19">Chuyên khoa: Khám Nhi</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="content-Select-specialty">
                    <div class="title-row2">
                        <span>
                            <div class="styles_animationTop__2p2gr styles_infoBookingTitle__1MICA" style="animation-duration: 0s; animation-delay: 0s; animation-fill-mode: forwards;">
                                <span>Vui lòng chọn dịch vụ</span>
                            </div>
                        </span>
                    </div> 

                    <div class="item-content">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th class="item item_1">#</th>
                                    <th class="item item_2">Tên dịch vụ</th>
                                    <th class="item item_3">Giá tiền</th>
                                    <th class="item item_4"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr-content">
                                    <td class="item item_1"><b>1</b></td>
                                    <td class="item item_2"><b>Khám dịch vụ</b>
                                        <div class="content-service">
                                            <div>Lịch khám: Thứ 2, 3, 4, 5, 6, 7, CN</div>
                                            <div>(Áp dụng chính sách giá từ ngày 01/01/2025)</div>
                                        </div>
                                    </td>
                                    <td class="item item_3">
                                        <p class="styles_salePrice__HRZ8n">130.000 đ</p>
                                        <p class="styles_originalPrice__KZtAd"></p>
                                    </td>
                                    <td class="item item_4">
                                        <a href="/make-an-appointment">
                                            <div class="style-btn-price">
                                                <button type="button" class="ant-btn ant-btn-default styles_btnAntd__zap7d styles_chooseServiceButton__9ATUi">
                                                    <span>Đặt khám ngay</span>
                                                </button>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="tr-content">
                                    <td class="item item_1"><b>1</b></td>
                                    <td class="item item_2"><b>Khám dịch vụ</b>
                                        <div class="content-service">
                                            <div>Lịch khám: Thứ 2, 3, 4, 5, 6, 7, CN</div>
                                            <div>(Áp dụng chính sách giá từ ngày 01/01/2025)</div>
                                        </div>
                                    </td>
                                    <td class="item item_3">
                                        <p class="styles_salePrice__HRZ8n">130.000 đ</p>
                                        <p class="styles_originalPrice__KZtAd"></p>
                                    </td>
                                    <td class="item item_4">
                                        <a href="/make-an-appointment">
                                            <div class="style-btn-price">
                                                <button type="button" class="ant-btn ant-btn-default styles_btnAntd__zap7d styles_chooseServiceButton__9ATUi">
                                                    <span>Đặt khám ngay</span>
                                                </button>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>  

            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush