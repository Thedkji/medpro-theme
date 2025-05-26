@extends('layout')
@push('styles')
    <link rel="stylesheet" href="./assets/css/confirm-information.css?v=<?php echo time(); ?>" />
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
                        </span> </li><li class="undefined  styles_last__rM2K0">

                        <span class="nav-span">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                            </svg>
                            <a>Xác nhận thông tin</a>
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
                                <span>Xác nhận thông tin khám</span>
                            </div>
                        </span>
                    </div> 

                    <div class="item-content">
                        <table class="content-table">
                            <thead>
                                <tr class="tr-head">
                                    <th class="item item_1">#</th>
                                    <th class="item item_2">chuyên khoa</th>
                                    <th class="item item_2">Thời gian khám</th>
                                    <th class="item item_2">Dịch vụ</th>
                                    <th class="item item_3">Tiền khám</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr-content">
                                    <td class="item item_1">
                                        <b>1</b>
                                    </td>
                                    <td class="item item_2">
                                        <p>Khám Nhi</p>
                                    </td>
                                    <td class="item item_3">
                                        <p>08:00 - 09:00</p>
                                        <p>31/05/2025</p>
                                    </td>
                                    <td class="item item_4">
                                        <p>Khám dịch vụ</p>
                                    </td>
                                    <td class="item item_5">
                                        <p>130.000 đ</p>
                                    </td>
                                    <td class="item item_6">
                                        <img class="default" width="20" height="20" src="https://img.icons8.com/metro/20/737373/trash.png" alt="trash"/>
                                        <button type="button" class="styles_btnDelete row-btn">
                                            <span class="icon-profile-btn">
                                                <img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjZmQzOTdhIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciICB2aWV3Qm94PSIwIDAgMjYgMjYiIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjE1cHgiPjxwYXRoIGQ9Ik0gMTEgLTAuMDMxMjUgQyAxMC4xNjQwNjMgLTAuMDMxMjUgOS4zNDM3NSAwLjEzMjgxMyA4Ljc1IDAuNzE4NzUgQyA4LjE1NjI1IDEuMzA0Njg4IDcuOTY4NzUgMi4xMzY3MTkgNy45Njg3NSAzIEwgNCAzIEMgMy40NDkyMTkgMyAzIDMuNDQ5MjE5IDMgNCBMIDIgNCBMIDIgNiBMIDI0IDYgTCAyNCA0IEwgMjMgNCBDIDIzIDMuNDQ5MjE5IDIyLjU1MDc4MSAzIDIyIDMgTCAxOC4wMzEyNSAzIEMgMTguMDMxMjUgMi4xMzY3MTkgMTcuODQzNzUgMS4zMDQ2ODggMTcuMjUgMC43MTg3NSBDIDE2LjY1NjI1IDAuMTMyODEzIDE1LjgzNTkzOCAtMC4wMzEyNSAxNSAtMC4wMzEyNSBaIE0gMTEgMi4wMzEyNSBMIDE1IDIuMDMxMjUgQyAxNS41NDY4NzUgMi4wMzEyNSAxNS43MTg3NSAyLjE2MDE1NiAxNS43ODEyNSAyLjIxODc1IEMgMTUuODQzNzUgMi4yNzczNDQgMTUuOTY4NzUgMi40NDE0MDYgMTUuOTY4NzUgMyBMIDEwLjAzMTI1IDMgQyAxMC4wMzEyNSAyLjQ0MTQwNiAxMC4xNTYyNSAyLjI3NzM0NCAxMC4yMTg3NSAyLjIxODc1IEMgMTAuMjgxMjUgMi4xNjAxNTYgMTAuNDUzMTI1IDIuMDMxMjUgMTEgMi4wMzEyNSBaIE0gNCA3IEwgNCAyMyBDIDQgMjQuNjUyMzQ0IDUuMzQ3NjU2IDI2IDcgMjYgTCAxOSAyNiBDIDIwLjY1MjM0NCAyNiAyMiAyNC42NTIzNDQgMjIgMjMgTCAyMiA3IFogTSA4IDEwIEwgMTAgMTAgTCAxMCAyMiBMIDggMjIgWiBNIDEyIDEwIEwgMTQgMTAgTCAxNCAyMiBMIDEyIDIyIFogTSAxNiAxMCBMIDE4IDEwIEwgMTggMjIgTCAxNiAyMiBaIi8+PC9zdmc+"/>
                                            </span>
                                            <span> Xóa</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="container-content">
                <div class="hospital-address">
                    
                </div>

                <div class="content-Select-specialty">
                    <div class="title-row2">
                        <span>
                            <div class="title" style="animation-duration: 0s; animation-delay: 0s; animation-fill-mode: forwards;">
                                <span>Dịch vụ trợ lý cá nhân</span>
                                <p>Dẫn bạn đi khám, giúp việc, phiên dịch,...</p>
                            </div>
                        </span>
                    </div> 

                    <div class="item-content">
                        <div class="row-item">
                            <label class="ant-radio-wrapper">
                                <span class="ant-radio">
                                    <input type="radio" class="ant-radio-input" value="95066bbb72da4a8eaf6cc08df97c92a8">
                                    <span class="ant-radio-inner"></span>
                                </span>
                                <span  class="ant-radio2">
                                    <div>
                                        <p class="content-title">
                                            <span>Trợ lý cá nhân, giúp việc </span>
                                        </p>
                                        <div class="content-title-2">
                                            <p class="">
                                                <span class="">Giá: 299.000đ / 3 giờ</span>
                                                <span class="line-through">399.000đ</span>
                                            </p>
                                            <div class="styles_careItemDetail__D9e7E">Chi tiết</div>
                                        </div>
                                    </div>
                                </span>
                            </label>
                            <label class="ant-radio-wrapper">
                                <span class="ant-radio">
                                    <input type="radio" class="ant-radio-input" value="95066bbb72da4a8eaf6cc08df97c92a8">
                                    <span class="ant-radio-inner"></span>
                                </span>
                                <span  class="ant-radio2">
                                    <div>
                                        <p class="content-title">
                                            <span>Trợ lý cá nhân tiếng Anh / Hoa</span>
                                        </p>
                                        <div class="content-title-2">
                                            <p class="">
                                                <span class="">Giá: 699.000đ / 3 giờ</span>
                                            </p>
                                            <div class="styles_careItemDetail__D9e7E">Chi tiết</div>
                                        </div>
                                    </div>
                                </span>
                            </label>
                            <label class="ant-radio-wrapper">
                                <span class="ant-radio">
                                    <input type="radio" class="ant-radio-input" value="95066bbb72da4a8eaf6cc08df97c92a8">
                                    <span class="ant-radio-inner"></span>
                                </span>
                                <span  class="ant-radio2">
                                    <div>
                                        <p class="content-title">
                                            <span>Trợ lý cá nhân tiếng Khmer</span>
                                        </p>
                                        <div class="content-title-2">
                                            <p class="">
                                                <span class="">Giá: 799.000đ / 3 giờ</span>
                                            </p>
                                            <div class="styles_careItemDetail__D9e7E">Chi tiết</div>
                                        </div>
                                    </div>
                                </span>
                            </label>
                            <p class="note">*Dịch vụ này được cung cấp bởi Công ty Care247, không phải CSYT cung cấp, không bắt buộc.</P>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-content">
                <div class="hospital-address">
                    
                </div>

                <div class="content-Select-specialty">
                    <div class="title-row2">
                        <span>
                            <div class="title" style="animation-duration: 0s; animation-delay: 0s; animation-fill-mode: forwards;">
                                <span>Thông tin bệnh nhân</span>
                            </div>
                        </span>
                    </div> 

                    <div class="item-content3">
                        <div class="styles_gridRows__yvLvv">
                            <div class="styles_item__9KG_h">
                                <div class="styles_titleInfo__23nMG">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path></svg>
                                    <span>Họ và tên:</span>
                                </div>
                                <div class="styles_content__IegwF">VŨ CÔNG TUYÊN</div>
                            </div>
                            <div class="styles_item__9KG_h">
                                <div class="styles_titleInfo__23nMG"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M372 0h-79c-10.7 0-16 12.9-8.5 20.5l16.9 16.9-80.7 80.7C198.5 104.1 172.2 96 144 96 64.5 96 0 160.5 0 240c0 68.5 47.9 125.9 112 140.4V408H76c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h36v28c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-28h36c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-36v-27.6c64.1-14.6 112-71.9 112-140.4 0-28.2-8.1-54.5-22.1-76.7l80.7-80.7 16.9 16.9c7.6 7.6 20.5 2.2 20.5-8.5V12c0-6.6-5.4-12-12-12zM144 320c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg>
                                    <span>Giới tính:</span>
                                </div>
                                <div class="styles_content__IegwF">Nam</div>
                            </div>
                            <div class="styles_item__9KG_h">
                                <div class="styles_titleInfo__23nMG"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path></svg>
                                    <span>Ngày sinh:</span>
                                </div>
                                <div class="styles_content__IegwF">14/01/2004</div>
                            </div>
                            <div class="styles_item__9KG_h">
                                <div class="styles_titleInfo__23nMG"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm0 400H48V80h480v352zM208 256c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm-89.6 128h179.2c12.4 0 22.4-8.6 22.4-19.2v-19.2c0-31.8-30.1-57.6-67.2-57.6-10.8 0-18.7 8-44.8 8-26.9 0-33.4-8-44.8-8-37.1 0-67.2 25.8-67.2 57.6v19.2c0 10.6 10 19.2 22.4 19.2zM360 320h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8z"></path></svg>
                                    <span>CMND:</span>
                                </div>
                                <div class="styles_content__IegwF">030204018842</div>
                            </div>
                            <div class="styles_item__9KG_h">
                                <div class="styles_titleInfo__23nMG"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C118.941 8 8 118.919 8 256c0 137.059 110.919 248 248 248 48.154 0 95.342-14.14 135.408-40.223 12.005-7.815 14.625-24.288 5.552-35.372l-10.177-12.433c-7.671-9.371-21.179-11.667-31.373-5.129C325.92 429.757 291.314 440 256 440c-101.458 0-184-82.542-184-184S154.542 72 256 72c100.139 0 184 57.619 184 160 0 38.786-21.093 79.742-58.17 83.693-17.349-.454-16.91-12.857-13.476-30.024l23.433-121.11C394.653 149.75 383.308 136 368.225 136h-44.981a13.518 13.518 0 0 0-13.432 11.993l-.01.092c-14.697-17.901-40.448-21.775-59.971-21.775-74.58 0-137.831 62.234-137.831 151.46 0 65.303 36.785 105.87 96 105.87 26.984 0 57.369-15.637 74.991-38.333 9.522 34.104 40.613 34.103 70.71 34.103C462.609 379.41 504 307.798 504 232 504 95.653 394.023 8 256 8zm-21.68 304.43c-22.249 0-36.07-15.623-36.07-40.771 0-44.993 30.779-72.729 58.63-72.729 22.292 0 35.601 15.241 35.601 40.77 0 45.061-33.875 72.73-58.161 72.73z"></path></svg>
                                    <span>Email:</span>
                                </div>
                                <div class="styles_content__IegwF">tuyencon2k4@gmail.com</div>
                            </div>
                            <div class="styles_item__9KG_h">
                                <div class="styles_titleInfo__23nMG"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></svg>
                                    <span>Dân tộc:</span>
                                </div>
                                <div class="styles_content__IegwF">Kinh</div>
                            </div>
                            <div class="styles_item__9KG_h">
                                <div class="styles_titleInfo__23nMG"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M527.9 32H48.1C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48.1 48h479.8c26.6 0 48.1-21.5 48.1-48V80c0-26.5-21.5-48-48.1-48zM54.1 80h467.8c3.3 0 6 2.7 6 6v42H48.1V86c0-3.3 2.7-6 6-6zm467.8 352H54.1c-3.3 0-6-2.7-6-6V256h479.8v170c0 3.3-2.7 6-6 6zM192 332v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v40c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12z"></path></svg>
                                    <span>Mã số BHYT:</span>
                                </div>
                                <div class="styles_content__IegwF">Chưa cập nhật</div>
                            </div>
                            <div class="styles_item__9KG_h">
                                <div class="styles_titleInfo__23nMG"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
                                    <span>Địa chỉ:</span>
                                </div>
                                <div class="styles_content__IegwF">Cao La Xã Dân Chủ Huyện Tứ Kỳ Tỉnh Hải Dương</div>
                            </div>
                        </div>
                        <div class="styles_attentionConfirmPayment__8nbuz" style="background-color: rgb(255, 239, 239);"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" color="#F5222D" class="styles_icon__UIQCM" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(245, 34, 45);"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path><path d="M464 688a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm24-112h48c4.4 0 8-3.6 8-8V296c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v272c0 4.4 3.6 8 8 8z"></path></svg>
                            <p class="styles_content__IegwF">Trong thời gian quy định, nếu quý khách hủy phiếu khám sẽ được hoàn lại tiền khám và các dịch vụ đặt thêm (không bao gồm phí tiện ích).</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-content">
                <div class="hospital-address">
                    
                </div>
                <div class="button-cancel">
                    <a href="/select-profile">
                        <button type="button" class="ant-btn ant-btn-text styles_btnBack__IzOr4">
                            <span>Quay lại</span>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="#003553" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"></path><path d="M8 7v4L2 6l6-5v4h5a8 8 0 1 1 0 16H4v-2h9a6 6 0 1 0 0-12H8z"></path>
                                </g>
                            </svg>
                        </button>
                    </a>
                    <a href="/payment-information">
                        <button type="button" class="styles_addProfile" style="float: right; font-weight: 500;">
                            <span>Xác nhận</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush