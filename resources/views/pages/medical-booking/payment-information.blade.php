@extends('layout')
@push('styles')
    <link rel="stylesheet" href="./assets/css/payment-information.css?v=<?php echo time(); ?>" />
@endpush
@section('contents')  
    <div class="container select-pecialty">
        <div id="confirm-information">  
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
                            <a>Thanh toán</a>
                        </span>
                    </li>
                    <div id="last"></div>
                </ul>
            </div>

            <div class="container-content">
                <div class="information">
                    <div class="hospital-address">
                        <div class="title-row1">
                            <span>Thông tin bệnh nhân</span>
                        </div>
                        <div class="content-hospital">
                            <ul>
                                <li>
                                    <span class="row-1">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" class="styles_icon__DEeUh" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M248 104c-53 0-96 43-96 96s43 96 96 96 96-43 96-96-43-96-96-96zm0 144c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm0-240C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-49.7 0-95.1-18.3-130.1-48.4 14.9-23 40.4-38.6 69.6-39.5 20.8 6.4 40.6 9.6 60.5 9.6s39.7-3.1 60.5-9.6c29.2 1 54.7 16.5 69.6 39.5-35 30.1-80.4 48.4-130.1 48.4zm162.7-84.1c-24.4-31.4-62.1-51.9-105.1-51.9-10.2 0-26 9.6-57.6 9.6-31.5 0-47.4-9.6-57.6-9.6-42.9 0-80.6 20.5-105.1 51.9C61.9 339.2 48 299.2 48 256c0-110.3 89.7-200 200-200s200 89.7 200 200c0 43.2-13.9 83.2-37.3 115.9z"></path></svg>
                                    </span>
                                    <div class="row-2">
                                        <p class="styles_hospitalName__KNM19">VŨ CÔNG TUYÊN</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="row-1">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" class="styles_icon__DEeUh" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path></svg>
                                    </span>
                                    <div class="row-2">
                                        <p class="styles_hospitalName__KNM19">0954737347</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="row-1">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="styles_icon__DEeUh" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
                                    </span>
                                    <div class="row-2">
                                        <p class="styles_hospitalName__KNM19">An Lại - Dân Chủ, Xã An Thới Đông, Huyện Cần Giờ, Thành phố Hồ Chí Minh</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="hospital-address">
                        <div class="title-row1">
                            <span>Thông tin bệnh nhân</span>
                        </div>
                        <div class="content-hospital">
                            <ul>
                                <li>
                                    <span class="row-1">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" class="styles_icon__DEeUh" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M248 104c-53 0-96 43-96 96s43 96 96 96 96-43 96-96-43-96-96-96zm0 144c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm0-240C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-49.7 0-95.1-18.3-130.1-48.4 14.9-23 40.4-38.6 69.6-39.5 20.8 6.4 40.6 9.6 60.5 9.6s39.7-3.1 60.5-9.6c29.2 1 54.7 16.5 69.6 39.5-35 30.1-80.4 48.4-130.1 48.4zm162.7-84.1c-24.4-31.4-62.1-51.9-105.1-51.9-10.2 0-26 9.6-57.6 9.6-31.5 0-47.4-9.6-57.6-9.6-42.9 0-80.6 20.5-105.1 51.9C61.9 339.2 48 299.2 48 256c0-110.3 89.7-200 200-200s200 89.7 200 200c0 43.2-13.9 83.2-37.3 115.9z"></path></svg>
                                    </span>
                                    <div class="row-2">
                                        <p class="styles_hospitalName__KNM19">VŨ CÔNG TUYÊN</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="row-1">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" class="styles_icon__DEeUh" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path></svg>
                                    </span>
                                    <div class="row-2">
                                        <p class="styles_hospitalName__KNM19">0954737347</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="row-1">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="styles_icon__DEeUh" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
                                    </span>
                                    <div class="row-2">
                                        <p class="styles_hospitalName__KNM19">An Lại - Dân Chủ, Xã An Thới Đông, Huyện Cần Giờ, Thành phố Hồ Chí Minh</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="content-Select-specialty">
                    <div class="title-row2">
                        <span>
                            <div class="styles_animationTop__2p2gr styles_infoBookingTitle__1MICA" style="animation-duration: 0s; animation-delay: 0s; animation-fill-mode: forwards;">
                                <span>Chọn phương thức thanh toán</span>
                            </div>
                        </span>
                    </div> 

                    <div class="item-content">
                        <div class="ant-card-body">
                            <div class="styles_header__nd0bh">
                                <div class="styles_dot__yYSA1"></div>
                                <div class="styles_label__5WPz0">
                                    <p class="styles_contentMethod___fsTm">VietQR</p>
                                    <p class="styles_descriptionHeader__L6pBC">Thanh toán Chuyển khoản bằng các ứng dụng Ngân hàng/Ví điện tử</p>
                                </div>
                            </div>

                            <div class="styles_header__nd0bh">
                                <div class="styles_dot__yYSA1"></div>
                                <div class="styles_label__5WPz0">
                                    <p class="styles_contentMethod___fsTm">VNPAY QR</p>
                                    <p class="styles_descriptionHeader__L6pBC">Ngân hàng có hỗ trợ VNPAY QR</p>
                                </div>
                            </div>

                            <div class="styles_header__nd0bh">
                                <div class="styles_dot__yYSA1"></div>
                                <div class="styles_label__5WPz0">
                                    <p class="styles_contentMethod___fsTm">Ví Momo</p>
                                </div>
                            </div>

                            <div class="styles_header__nd0bh">
                                <div class="styles_dot__yYSA1"></div>
                                <div class="styles_label__5WPz0">
                                    <p class="styles_contentMethod___fsTm">Thẻ quốc tế Visa, Master, JCB</p>
                                    <p class="styles_descriptionHeader__L6pBC">Một số ngân hàng phải đăng kí (thanh toán Online) khi sử dụng thanh toán bằng thẻ tín dụng</p>
                                </div>
                            </div>

                            <div class="styles_header__nd0bh">
                                <div class="styles_dot__yYSA1"></div>
                                <div class="styles_label__5WPz0">
                                    <p class="styles_contentMethod___fsTm">Thanh toán bằng Thẻ ATM/Internet Banking</p>
                                    <p class="styles_descriptionHeader__L6pBC">Một số ngân hàng phải đăng kí (Online/Internet banking) khi thanh toán bằng thẻ ATM</p>
                                </div>
                            </div>
                            
                            <div class="styles_header__nd0bh">
                                <div class="styles_dot__yYSA1"></div>
                                <div class="styles_label__5WPz0">
                                    <p class="styles_contentMethod___fsTm">Thanh toán hộ</p>
                                    <p class="styles_descriptionHeader__L6pBC">Chia sẻ link thanh toán cho người thân</p>
                                </div>
                            </div>
                        </div>
                            
                        <div class="ant-card-body-2">
                            <div class="styles_colBill__RQBp1" style="padding-left: 15px; padding-right: 15px;">
                                <div class="styles_animationTop__2p2gr">
                                    <div class="styles_paymentTitle__DtuKi">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="styles_paymentTitleIcon__ITpSv" color="#11a2f3" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><rect width="416" height="320" x="48" y="96" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" rx="56" ry="56"></rect><path fill="none" stroke-linejoin="round" stroke-width="60" d="M48 192h416M128 300h48v20h-48z"></path>
                                    </svg>
                                    <h3>Thông tin thanh toán</h3>
                                </div>
                                <div class="styles_cardView__nOSnO">
                                    <ul class="styles_listBill__K6Ox9">
                                        <div class="styles_paymentInfo__QHOW4">
                                            <li>
                                                <div class="styles_itemSubject__o7h77">
                                                    <p class="styles_itemKeys__Z1WtB">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="styles_itemIcon__Qk_5r" color="rgba(177, 177, 177, 1)" height="18" width="18" xmlns="http://www.w3.org/2000/svg" style="color: rgb(177, 177, 177);"><path d="M464 128h-80V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v48H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V176c0-26.5-21.5-48-48-48zM192 96h128v32H192V96zm160 248c0 4.4-3.6 8-8 8h-56v56c0 4.4-3.6 8-8 8h-48c-4.4 0-8-3.6-8-8v-56h-56c-4.4 0-8-3.6-8-8v-48c0-4.4 3.6-8 8-8h56v-56c0-4.4 3.6-8 8-8h48c4.4 0 8 3.6 8 8v56h56c4.4 0 8 3.6 8 8v48z"></path></svg>
                                                        <span>Chuyên khoa</span>
                                                    </p>
                                                    <p class="styles_itemValues__1QCn9">Khám nhi</p>
                                                </div>
                                            </li>
                                            <li class="br_li"></li>
                                            <li>
                                                <div class="styles_itemService__Y_I10">
                                                    <p class="styles_itemKeys__Z1WtB"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="styles_itemIcon__Qk_5r" color="rgba(177, 177, 177, 1)" height="18" width="18" xmlns="http://www.w3.org/2000/svg" style="color: rgb(177, 177, 177);"><path d="M159.88,175.82h64v64a16,16,0,0,0,16,16h64a16,16,0,0,0,16-16v-64h64a16,16,0,0,0,16-16v-64a16,16,0,0,0-16-16h-64v-64a16,16,0,0,0-16-16h-64a16,16,0,0,0-16,16v64h-64a16,16,0,0,0-16,16v64A16,16,0,0,0,159.88,175.82ZM568.07,336.13a39.91,39.91,0,0,0-55.93-8.47L392.47,415.84H271.86a16,16,0,0,1,0-32H350.1c16,0,30.75-10.87,33.37-26.61a32.06,32.06,0,0,0-31.62-37.38h-160a117.7,117.7,0,0,0-74.12,26.25l-46.5,37.74H15.87a16.11,16.11,0,0,0-16,16v96a16.11,16.11,0,0,0,16,16h347a104.8,104.8,0,0,0,61.7-20.27L559.6,392A40,40,0,0,0,568.07,336.13Z"></path></svg>
                                                        <span>Dịch vụ</span>
                                                    </p>
                                                    <p class="styles_itemValues__1QCn9">Khám dịch vụ</p>
                                                </div>
                                            </li>
                                            <li class="br_li"></li>
                                            <li>
                                                <div class="styles_itemService__Y_I10">
                                                    <p class="styles_itemKeys__Z1WtB"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" ariaHidden="true" class="styles_itemIcon__Qk_5r" color="rgba(177, 177, 177, 1)" height="18" width="18" xmlns="http://www.w3.org/2000/svg" style="color: rgb(177, 177, 177);"><path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z"></path><path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd"></path></svg>
                                                        <span>Ngày khám</span>
                                                    </p>
                                                    <p class="styles_itemValues__1QCn9">31/05/2025</p>
                                                </div>
                                            </li>
                                            <li class="br_li"></li>
                                            <li>
                                                <div class="styles_itemService__Y_I10">
                                                    <p class="styles_itemKeys__Z1WtB"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="styles_itemIcon__Qk_5r" color="rgba(177, 177, 177, 1)" height="18" width="18" xmlns="http://www.w3.org/2000/svg" style="color: rgb(177, 177, 177);"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm3.3 14.71L11 12.41V7h2v4.59l3.71 3.71-1.42 1.41z"></path></svg>
                                                        <span>Giờ khám</span>
                                                    </p>
                                                    <p class="styles_itemValues__1QCn9">10:00 - 10:30</p>
                                                </div>
                                            </li>
                                            <li class="br_li"></li>
                                            <li>
                                                <div class="styles_itemMoney__FsSY9">
                                                    <p class="styles_itemKeys__Z1WtB">Tiền khám</p>
                                                    <p class="styles_itemValues__1QCn9">130.000 đ</p>
                                                </div>
                                            </li>
                                        </div>
                                    </ul>
                                    <div class="br_li"></div>

                                    <ul class="styles_listPayment__i2tR1">
                                        <li class="styles_note_fee__XmUm_">
                                            <div class="styles_itemFee__KLmt0">
                                                <p>Phí tiện ích + Phí TGTT&nbsp;:</p>
                                                <span>0 đ</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="styles_itemTotal__r8DaW">
                                                <p>Tổng cộng: </p>
                                                <span>130.000 đ</span>
                                            </div>
                                        </li>
                                        <li class="styles_paymentTotalItem__AmfLL"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="styles_btnFooter__BoEi" id="payment">
                            <button type="button" class="styles_btnSubmit__2A00D" disabled="" style="float: right; font-weight: 500;">
                                <span>Thanh toán</span>
                            </button>
                        </div>
                        
                    </div>

                </div>  
            </div>
            
        </div>
        <div class="button-cancel">
            <a href="/make-an-appointment">
                <button type="button" class="ant-btn ant-btn-text styles_btnBack__IzOr4">
                    <span>Quay lại</span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="#003553" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path><path d="M8 7v4L2 6l6-5v4h5a8 8 0 1 1 0 16H4v-2h9a6 6 0 1 0 0-12H8z"></path>
                        </g>
                    </svg>
                </button>
            </a>
        </div>
    </div>
@endsection
@push('scripts')
@endpush