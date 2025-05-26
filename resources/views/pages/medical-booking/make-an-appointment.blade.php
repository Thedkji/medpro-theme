@extends('layout')
@push('styles')
    <link rel="stylesheet" href="./assets/css/make-an-appointment.css" />
@endpush
@section('contents')

<div class="container select-pecialty">
        {{-- chọn ngày khám --}}
        <div id="calendar">  
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
                            <a>Chọn ngày khám</a>
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
                                <span class="styles_icon__4gn5u"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none"><svg viewBox="0 0 20 18"><path d="M15.8333 3.27273H13.3333V2.45455C13.3333 1.80356 13.0699 1.17924 12.6011 0.71892C12.1323 0.258603 11.4964 0 10.8333 0H9.16667C8.50363 0 7.86774 0.258603 7.3989 0.71892C6.93006 1.17924 6.66667 1.80356 6.66667 2.45455V3.27273H4.16667C3.062 3.27403 2.00296 3.70545 1.22185 4.47236C0.440735 5.23927 0.00132321 6.27906 0 7.36364L0 13.9091C0.00132321 14.9937 0.440735 16.0335 1.22185 16.8004C2.00296 17.5673 3.062 17.9987 4.16667 18H15.8333C16.938 17.9987 17.997 17.5673 18.7782 16.8004C19.5593 16.0335 19.9987 14.9937 20 13.9091V7.36364C19.9987 6.27906 19.5593 5.23927 18.7782 4.47236C17.997 3.70545 16.938 3.27403 15.8333 3.27273V3.27273ZM8.33333 2.45455C8.33333 2.23755 8.42113 2.02944 8.57741 1.876C8.73369 1.72256 8.94565 1.63636 9.16667 1.63636H10.8333C11.0543 1.63636 11.2663 1.72256 11.4226 1.876C11.5789 2.02944 11.6667 2.23755 11.6667 2.45455V3.27273H8.33333V2.45455ZM12.5 11.4545H10.8333V13.0909C10.8333 13.3079 10.7455 13.516 10.5893 13.6695C10.433 13.8229 10.221 13.9091 10 13.9091C9.77899 13.9091 9.56702 13.8229 9.41074 13.6695C9.25446 13.516 9.16667 13.3079 9.16667 13.0909V11.4545H7.5C7.27899 11.4545 7.06702 11.3683 6.91074 11.2149C6.75446 11.0615 6.66667 10.8534 6.66667 10.6364C6.66667 10.4194 6.75446 10.2113 6.91074 10.0578C7.06702 9.90438 7.27899 9.81818 7.5 9.81818H9.16667V8.18182C9.16667 7.96482 9.25446 7.75672 9.41074 7.60328C9.56702 7.44984 9.77899 7.36364 10 7.36364C10.221 7.36364 10.433 7.44984 10.5893 7.60328C10.7455 7.75672 10.8333 7.96482 10.8333 8.18182V9.81818H12.5C12.721 9.81818 12.933 9.90438 13.0893 10.0578C13.2455 10.2113 13.3333 10.4194 13.3333 10.6364C13.3333 10.8534 13.2455 11.0615 13.0893 11.2149C12.933 11.3683 12.721 11.4545 12.5 11.4545Z"></path></svg></svg></span>
                                <div class="row-2">
                                    <p class="styles_hospitalName__KNM19">Chuyên khoa: Khám Nhi</p>
                                </div>
                            </li>
                            <li>
                                <span class="styles_icon__SpKnU"><span class="styles_icon__4gn5u"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none"><svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15.2087 10H14.7925C13.9887 10 13.3337 9.34625 13.3337 8.54125V6.66625H11.4587C10.655 6.66625 10 6.0125 10 5.2075V4.79125C10 3.9875 10.6537 3.3325 11.4587 3.3325H13.3337V1.4575C13.3337 0.65375 13.9875 0 14.7913 0H15.2075C16.0113 0 16.6663 0.65375 16.6663 1.45875V3.33375H18.5413C19.345 3.33375 20 3.9875 20 4.7925V5.20875C20 6.0125 19.3463 6.6675 18.5413 6.6675H16.6663V8.5425C16.6663 9.34625 16.0125 10 15.2087 10Z"></path><path d="M0.41 10.0018C0.1825 10.0068 0 10.1918 0 10.4193V18.1255C0 18.2405 0.0937498 18.3343 0.20875 18.3343H2.185C2.37125 18.3343 2.535 18.2105 2.58625 18.0318L4.43 11.533C4.54875 11.113 4.32375 10.6718 3.91375 10.523C3.15875 10.2468 2 9.97551 0.41 10.0018V10.0018Z"></path><path d="M18.334 14.5838C16.6677 14.5838 13.334 16.6938 11.6677 16.6938C10.0015 16.6938 8.12523 15.4163 8.12523 15.4163C8.12523 15.4163 10.3702 15.8326 11.6665 15.8326C12.9627 15.8326 13.3327 15.3901 13.3327 14.7913C13.3327 13.3326 10.8552 13.1063 9.60273 12.9163C8.37273 12.2313 7.73398 11.6901 5.69648 11.5176C5.68398 11.6363 5.66523 11.7538 5.63273 11.8726L3.95898 17.7726C5.85523 18.6338 9.12023 20.0001 10.834 20.0001C13.334 20.0001 20.0002 16.6663 20.0002 15.8338C20.0002 15.0001 19.1665 14.5838 18.334 14.5838Z"></path></svg></svg></span></span>
                                <div class="row-2">
                                    <p class="styles_hospitalName__KNM19">Dịch Vụ: Khám dịch vụ</p>
                                </div>
                            </li>
                            <li>
                                <span class="styles_icon__SpKnU"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M9.402 10.246c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z"></path><path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zm-4.118 9.79c1.258 0 2-1.067 2-2.872 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684c.047.64.594 1.406 1.703 1.406zm-2.89-5.435h-.633A12.6 12.6 0 0 0 4.5 8.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675V7.354z"></path></svg></span>
                                <div class="styles_infoHopital__4IoBD">
                                    <p class="styles_hospitalName__KNM19" id="selectedDate">Ngày khám: </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="content-Select-specialty">
                    <div class="title-row2">
                        <span>
                            <div class="styles_animationTop__2p2gr styles_infoBookingTitle__1MICA" style="animation-duration: 0s; animation-delay: 0s; animation-fill-mode: forwards;">
                                <span>Vui lòng chọn ngày khám</span>
                            </div>
                        </span>
                    </div> 

                    <div class="container-calendar">
                        <div class="content-calendar content-calendar-row1">
                            <div class="ant-space-align-center">
                                <div class="ant-space-item">
                                    <button type="button" class="ant-btn" id="prevMonth" style="color: rgb(149, 165, 166);">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zm116-292H256v-70.9c0-10.7-13-16.1-20.5-8.5L121.2 247.5c-4.7 4.7-4.7 12.2 0 16.9l114.3 114.9c7.6 7.6 20.5 2.2 20.5-8.5V300h116c6.6 0 12-5.4 12-12v-64c0-6.6-5.4-12-12-12z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="ant-space-item">
                                    <div class="styles_datetime" id="monthYear"></div>
                                </div>
                                <div class="ant-space-item">
                                    <button type="button" class="ant-btn" id="nextMonth" style="color: rgb(0, 181, 241);">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zM140 300h116v70.9c0 10.7 13 16.1 20.5 8.5l114.3-114.9c4.7-4.7 4.7-12.2 0-16.9l-114.3-115c-7.6-7.6-20.5-2.2-20.5 8.5V212H140c-6.6 0-12 5.4-12 12v64c0 6.6 5.4 12 12 12z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="content-calendar-scroll">
                            <div class="content-calendar styles_weekContainer">
                                <div class="styles_weekCell">CN</div>
                                <div class="styles_weekCell">Hai</div>
                                <div class="styles_weekCell">Ba</div>
                                <div class="styles_weekCell">Tư</div>
                                <div class="styles_weekCell">Năm</div>
                                <div class="styles_weekCell">Sáu</div>
                                <div class="styles_weekCell">Bảy</div>
                            </div>
                            <div class="content-calendar styles_dayContainer" id="dayContainer"></div>
                        </div>
                        <div id="selectedDate"></div>
                    </div>

                    <div class="dateTimeDivider">
                        <div class="close-active">
                            <div class="br"></div>
                            <button type="button" class="ant-btn ant-btn-text">
                                <span>Đóng</span>
                            </button>
                        </div>

                        <div class="giokham_time">
                            <div class="giokham_sang">
                                <div>
                                    <h1>Buổi sáng</h1>
                                </div>
                                <ul class="giokham">
                                    <li>
                                        <a href="/select-profile">
                                            <button type="button" class="ant-btn ant-btn-default giokham_btn__i_eYn giokham_btnTime__fekkK">
                                                <span>07:30 - 08:00</span>
                                            </button>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/select-profile">
                                            <button type="button" class="ant-btn ant-btn-default giokham_btn__i_eYn giokham_btnTime__fekkK">
                                                <span>08:00 - 09:00</span>
                                            </button>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/select-profile">
                                            <button type="button" class="ant-btn ant-btn-default giokham_btn__i_eYn giokham_btnTime__fekkK">
                                                <span>09:00 - 10:00</span>
                                            </button>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/select-profile">
                                            <button type="button" class="ant-btn ant-btn-default giokham_btn__i_eYn giokham_btnTime__fekkK">
                                                <span>10:00 - 10:30</span>
                                            </button>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="giokham_chieu">
                                <div>
                                    <h1>Buổi chiều</h1>
                                </div>
                                <ul class="giokham">
                                    <li>
                                        <a href="/select-profile">
                                            <button type="button" class="ant-btn ant-btn-default giokham_btn__i_eYn giokham_btnTime__fekkK">
                                                <span>13:00 - 14:00</span>
                                            </button>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/select-profile">
                                            <button type="button" class="ant-btn ant-btn-default giokham_btn__i_eYn giokham_btnTime__fekkK">
                                                <span>14:00 - 15:00</span>
                                            </button>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="styles_noteCalendar">
                        <div class="save-note">
                            <p>Tất cả thời gian theo múi giờ Việt Nam GMT +7</p>
                        </div>
                        <div class="contact">
                            <div class="contact-content">
                                <div class="title-contact">
                                    <p class="title-1">Bạn không chọn được thời gian như ý muốn?</p>
                                    <p class="title-2">Các bác sĩ Tư vấn khám bệnh từ xa luôn sẵn sàng hỗ trợ bạn.</p>
                                </div>
                                <div class="btn-contact">
                                    <button type="button" class="ant-btn ant-btn-default">
                                        <a href="/dich-vu-y-te/tu-van-kham-benh-tu-xa">Kết nối ngay</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        
                
                
                
                
                </div>{{-- content-Select-specialty --}}
            </div>
        </div>
        {{-- end chọn ngày khám --}}
</div>
<script>
        const monthYear = document.getElementById('monthYear');
        const dayContainer = document.getElementById('dayContainer');
        const prevMonth = document.getElementById('prevMonth');
        const nextMonth = document.getElementById('nextMonth');
        const selectedDate = document.getElementById('selectedDate');

        let currentDate = new Date(2025, 4, 21); // 21/05/2025
        let selectedDay = null;

        function renderCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();
        const today = new Date(2025, 4, 21);

        // Cập nhật tiêu đề tháng và năm
        monthYear.textContent = `Tháng ${String(month + 1).padStart(2, '0')}-${year}`;

        // Tính ngày đầu tiên và số ngày trong tháng
        const firstDayOfMonth = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const lastDayOfPrevMonth = new Date(year, month, 0).getDate();

        // Tạo các ô ngày
        let html = '';
        // Thêm các ngày của tháng trước để lấp đầy
        for (let i = firstDayOfMonth - 1; i >= 0; i--) {
            html += `<div class="styles_dayCell styles_dayCell_Faded"><span>${lastDayOfPrevMonth - i}</span></div>`;
        }
        // Thêm các ngày của tháng hiện tại
        for (let day = 1; day <= daysInMonth; day++) {
            const isToday = year === today.getFullYear() && month === today.getMonth() && day === today.getDate();
            const isAvailable = year === today.getFullYear() && month === today.getMonth() && day >= today.getDate();
            const isSelected = selectedDay && year === selectedDay.getFullYear() && month === selectedDay.getMonth() && day === selectedDay.getDate();
            const classes = [
            'styles_dayCell',
            isToday ? 'styles_NowDay' : isAvailable ? 'styles_availableDay' : 'styles_dayCell_Faded',
            isSelected ? 'styles_selectedDay__xyz' : ''
            ].filter(Boolean).join(' ');
            html += `<div class="${classes}" data-day="${day}"><span>${String(day).padStart(2, '0')}</span></div>`;
        }
        // Thêm các ngày của tháng sau để lấp đầy
        const totalCells = firstDayOfMonth + daysInMonth;
        const remainingCells = (Math.ceil(totalCells / 7) * 7) - totalCells;
        for (let i = 1; i <= remainingCells; i++) {
            html += `<div class="styles_dayCell styles_dayCell_Faded"><span>${String(i).padStart(2, '0')}</span></div>`;
        }
        dayContainer.innerHTML = html;

        const isCurrentMonth = year === today.getFullYear() && month === today.getMonth();
        const isNextMonth = year === today.getFullYear() && month === today.getMonth() + 1;
        prevMonth.style.color = isCurrentMonth ? 'rgb(149, 165, 166)' : 'rgb(0, 181, 241)'; // Xám khi tắt, xanh khi bật
        nextMonth.style.color = isNextMonth ? 'rgb(149, 165, 166)' : 'rgb(0, 181, 241)'; // Xám khi tắt, xanh khi bật

        prevMonth.disabled = isCurrentMonth; // Vô hiệu hóa nút "trước" nếu đang ở tháng hiện tại
        nextMonth.disabled = isNextMonth;    // Vô hiệu hóa nút "sau" nếu đang ở tháng sau

        prevMonth.addEventListener('click', () => {
            if (!isCurrentMonth) {
                month--;
                renderCalendar();
            }
        });

        nextMonth.addEventListener('click', () => {
            if (!isNextMonth) {
                month++;
                renderCalendar();
            }
        });
 

        // Thêm sự kiện click cho các ngày
        document.querySelectorAll('.styles_dayCell').forEach(cell => {
            cell.addEventListener('click', () => {
            const day = parseInt(cell.getAttribute('data-day'));
            if (day) { // Chỉ xử lý các ngày của tháng hiện tại
                selectedDay = new Date(year, month, day);
                selectedDate.textContent = `Ngày khám: ${String(day).padStart(2, '0')}/${String(month + 1).padStart(2, '0')}/${year}`;
                renderCalendar(); // Cập nhật lại lịch để hiển thị ngày khám
            }
            });
        });
        }

        prevMonth.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
        });

        nextMonth.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
        });

        // Khởi tạo lịch
        renderCalendar();
    </script>
@endsection
@push('scripts')
@endpush