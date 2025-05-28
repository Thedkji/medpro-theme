@extends('layout')
@push('styles')
    <link rel="stylesheet" href="./assets/css/select-profile.css" />
@endpush
@section('contents')

<div id="select-profile">
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
                        <a>Chọn hồ sơ bệnh nhân</a>
                    </span>
                </li>
                <div id="last"></div>
            </ul>
        </div>
        
        <div class="appointment-form">
            <div class="title-h1">
                <h1 class="name-h1">Chọn hồ sơ bệnh nhân</h1>
            </div>
            <div class="content-appointment-form">
                <div class="icon-hover">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" class="styles_icon__Uzlnr" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M16.707 13.293c-.391-.391-1.023-.391-1.414 0l-2.293 2.293v-7.586c0-.552-.447-1-1-1s-1 .448-1 1v7.586l-2.293-2.293c-.391-.391-1.023-.391-1.414 0s-.391 1.023 0 1.414l4.707 4.707 4.707-4.707c.391-.391.391-1.023 0-1.414z"></path></svg>                           
                </div>
                <div class="content-profile">
                    <p class="item-profile-name">
                        <span class="icon-profile-content">
                            <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="#C1D5E9"><svg width="18" height="18" viewBox="0 0 20 20" fill="#C1D5E9" xmlns="http://www.w3.org/2000/svg"><path opacity="0.8" d="M17.8506 17.5387V15.6248C17.8506 14.6095 17.4473 13.6359 16.7295 12.918C16.0116 12.2002 15.038 11.7969 14.0227 11.7969H6.36695C5.35173 11.7969 4.37809 12.2002 3.66023 12.918C2.94236 13.6359 2.53906 14.6095 2.53906 15.6248V17.5387" fill="#D3DEE6"></path><path opacity="0.8" d="M10.1951 10.1948C12.3092 10.1948 14.023 8.48104 14.023 6.36695C14.023 4.25287 12.3092 2.53906 10.1951 2.53906C8.08099 2.53906 6.36719 4.25287 6.36719 6.36695C6.36719 8.48104 8.08099 10.1948 10.1951 10.1948Z" fill="#D3DEE6"></path></svg></svg>
                        </span>
                        <span class="styles_Label__9ZpzP"></span>
                    </p>
                    <span class="item-name-title">VŨ CÔNG TUYÊN</span>
                </div>
                <div class="content-profile">
                    <p class="item-profile">
                        <span class="icon-profile-content">
                            <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="#C1D5E9"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path id="birthday-cake 1 (Traced)" opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M11.7067 0.643545C11.7984 0.725394 12.1536 1.3776 12.301 1.73493C12.3976 1.96917 12.4108 2.03057 12.4118 2.25029C12.4128 2.47368 12.4038 2.51635 12.325 2.65886C12.1563 2.96397 11.8023 3.15611 11.4717 3.12195C10.9259 3.06557 10.5499 2.55544 10.68 2.04762C10.7774 1.66675 11.2913 0.669048 11.4203 0.610207C11.5305 0.559965 11.6254 0.571 11.7067 0.643545ZM8.17432 0.658219C8.2785 0.754535 8.67024 1.50162 8.79275 1.83755C8.90983 2.15867 8.9108 2.37504 8.79626 2.61739C8.64235 2.94296 8.36729 3.11482 8 3.11482C7.63398 3.11482 7.37357 2.9535 7.20969 2.62528C7.03502 2.27541 7.09698 1.98109 7.51628 1.16906C7.75546 0.705878 7.86043 0.577515 8 0.577515C8.05425 0.577515 8.11993 0.607918 8.17432 0.658219ZM4.58837 0.612027C4.71516 0.67342 5.25486 1.74397 5.33092 2.08489C5.39314 2.36374 5.27802 2.69439 5.04843 2.89613C4.86948 3.0534 4.7027 3.11473 4.45205 3.1154C4.09406 3.1164 3.82835 2.95276 3.65356 2.62364C3.60026 2.52324 3.58776 2.4524 3.58774 2.25029C3.58774 2.01771 3.59715 1.97898 3.72672 1.67802C3.90295 1.26872 4.19866 0.729502 4.29407 0.643545C4.37169 0.573612 4.48422 0.56155 4.58837 0.612027ZM12.2205 3.91798C12.2755 3.94748 12.3446 4.01662 12.374 4.07162C12.4241 4.16503 12.4276 4.27921 12.4276 5.80813V7.44469H11.5479H10.6683L10.6684 5.79393C10.6685 4.20843 10.6708 4.13944 10.7258 4.04922C10.8294 3.8791 10.8943 3.86437 11.5396 3.86437C12.0463 3.86437 12.1334 3.87123 12.2205 3.91798ZM8.66649 3.90789C8.71859 3.93054 8.78782 3.99276 8.82034 4.04611C8.87775 4.14037 8.87945 4.19056 8.87954 5.79393L8.87966 7.44469H8H7.12035L7.12046 5.79393C7.12055 4.18997 7.12225 4.1404 7.17975 4.04602C7.27821 3.88435 7.37043 3.86422 8.00639 3.86551C8.4252 3.86636 8.59632 3.87734 8.66649 3.90789ZM5.14701 3.92189C5.33693 4.03778 5.33171 3.9846 5.33171 5.7998V7.44469H4.45205H3.5724V5.80813C3.5724 4.27921 3.57592 4.16503 3.62597 4.07162C3.7266 3.8838 3.80548 3.86437 4.46625 3.86448C4.99662 3.86457 5.06219 3.87009 5.14701 3.92189ZM13.6033 8.50129C13.8467 8.54297 14.0571 8.68967 14.1662 8.89372C14.2278 9.00888 14.2309 9.04894 14.2309 9.71907C14.2309 10.4159 14.2301 10.4248 14.1576 10.5543C14.1107 10.638 14.0323 10.7172 13.94 10.7744C13.8109 10.8542 13.7722 10.8633 13.5734 10.861C13.3875 10.8588 13.2384 10.8246 12.6587 10.6508C11.8373 10.4046 11.6364 10.3685 11.0935 10.3693C10.5929 10.37 10.375 10.4096 9.57974 10.6441C8.6968 10.9045 8.59688 10.9221 8 10.9221C7.40312 10.9221 7.30319 10.9045 6.42026 10.6441C5.62502 10.4096 5.4071 10.37 4.90654 10.3693C4.3628 10.3685 4.15482 10.4059 3.33788 10.6513C2.76106 10.8246 2.61255 10.8588 2.42656 10.861C2.22773 10.8633 2.18914 10.8542 2.06004 10.7744C1.9677 10.7172 1.8893 10.638 1.84241 10.5543C1.7699 10.4248 1.76911 10.4159 1.76911 9.71907C1.76911 9.04894 1.77224 9.00888 1.83379 8.89372C1.91096 8.74931 2.04362 8.63162 2.22359 8.5479L2.35554 8.4865L7.91203 8.48237C10.9681 8.48008 13.5292 8.48859 13.6033 8.50129ZM11.4941 11.2622C11.7067 11.2882 12.0273 11.3737 12.8674 11.6283C13.1892 11.7258 13.2724 11.7396 13.5491 11.7417L13.8643 11.744V13.0866L13.8644 14.4293H14.5002C15.0761 14.4293 15.1474 14.4348 15.2572 14.4879C15.5793 14.644 15.5814 15.1097 15.2606 15.262C15.1689 15.3056 14.5457 15.3097 8 15.3097C1.45431 15.3097 0.831071 15.3056 0.739351 15.262C0.4186 15.1097 0.420682 14.644 0.742841 14.4879C0.852563 14.4348 0.923903 14.4293 1.49981 14.4293H2.13563V13.0845V11.7399L2.37753 11.7515C2.64398 11.7643 2.69093 11.7539 3.70696 11.4565C4.73199 11.1564 5.03407 11.1629 6.24755 11.5112C7.17629 11.7778 7.5193 11.831 8.16127 11.8082C8.71707 11.7884 8.95492 11.7446 9.70067 11.5247C10.0313 11.4272 10.3941 11.3285 10.507 11.3054C10.787 11.2481 11.2231 11.229 11.4941 11.2622Z" fill="#C1D5E9"></path></svg></svg>
                        </span>
                        <span class="styles_Label__9ZpzP">Ngày sinh:</span>
                    </p>
                    <span class="item-name">14/01/2004</span>
                </div>
                <div class="content-profile">
                    <p class="item-profile">
                        <span class="icon-profile-content">
                            <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="#C1D5E9"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none"><g opacity="0.8"><path d="M17.5 16.6429V15.2713C17.5 14.5898 17.0851 13.9769 16.4523 13.7238L14.7572 13.0458C13.9524 12.7239 13.0352 13.0726 12.6475 13.8479L12.5 14.1429C12.5 14.1429 10.4167 13.7262 8.75 12.0596C7.08333 10.3929 6.66667 8.30957 6.66667 8.30957L6.96168 8.16206C7.73698 7.77441 8.08571 6.85718 7.76379 6.05237L7.08574 4.35725C6.83263 3.72449 6.21979 3.30957 5.53828 3.30957H4.16667C3.24619 3.30957 2.5 4.05576 2.5 4.97624C2.5 12.34 8.46954 18.3096 15.8333 18.3096C16.7538 18.3096 17.5 17.5634 17.5 16.6429Z" fill="#C1D5E9"></path></g></svg></svg>
                        </span>
                        <span class="styles_Label__9ZpzP">Số điện thoại:</span>
                    </p>
                    <span class="item-name">0353754546</span>
                </div>
                <div class="content-profile">
                    <p class="item-profile">
                        <span class="icon-profile-content">
                            <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="#C1D5E9"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 18.3337C12.8125 18.3337 17.5 13.1654 17.5 9.0744C17.5 4.9834 14.1421 1.66699 10 1.66699C5.85786 1.66699 2.5 4.9834 2.5 9.0744C2.5 13.1654 7.1875 18.3337 10 18.3337ZM10 11.667C11.3807 11.667 12.5 10.5477 12.5 9.16699C12.5 7.78628 11.3807 6.66699 10 6.66699C8.61929 6.66699 7.5 7.78628 7.5 9.16699C7.5 10.5477 8.61929 11.667 10 11.667Z" fill="#C1D5E9"></path></svg></svg>
                        </span>
                        <span class="styles_Label__9ZpzP">Địa chỉ:</span>
                    </p>
                    <span class="item-name">Cao La, Xã Dân Chủ, Huyện Tứ Kỳ, Tỉnh Hải Dương</span>
                </div>
                <div class="content-profile">
                    <p class="item-profile">
                        <span class="icon-profile-content">
                            <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="#C1D5E9"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 20" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 9.5V4H17V9.5C17 9.91421 16.6642 10.25 16.25 10.25C15.8358 10.25 15.5 9.91421 15.5 9.5Z" fill="#C1D5E9"></path><path d="M13 8V5H5V8C5 10.2091 6.79086 12 9 12C11.2091 12 13 10.2091 13 8Z" fill="#C1D5E9"></path><path d="M1.02813 3.5431L7.78168 0.541524C8.55737 0.196771 9.44281 0.196771 10.2185 0.541524L16.9721 3.5431C17.368 3.71906 17.368 4.28095 16.9721 4.45691L10.2185 7.45849C9.44281 7.80324 8.55737 7.80324 7.78168 7.45849L1.02813 4.45691C0.632224 4.28095 0.632224 3.71906 1.02813 3.5431Z" fill="#C1D5E9"></path><path d="M11.2996 13.3996L9.71103 15.0059C9.31962 15.4017 8.68038 15.4017 8.28897 15.0059L6.70045 13.3996C6.45505 13.1515 6.09681 13.0457 5.762 13.1442C2.95686 13.9691 1 15.8329 1 18.0001C1 19.1046 1.89543 20.0001 3 20.0001H15C16.1046 20.0001 17 19.1046 17 18.0001C17 15.8329 15.0431 13.9691 12.238 13.1442C11.9032 13.0457 11.5449 13.1515 11.2996 13.3996Z" fill="#C1D5E9"></path></svg></svg>
                        </span>
                        <span class="styles_Label__9ZpzP">Giới tính:</span>
                    </p>
                    <span class="item-name">Nam</span>
                </div>
                <div class="content-profile">
                    <p class="item-profile">
                        <span class="icon-profile-content">
                            <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="#C1D5E9"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.8" d="M2.5 6.25C2.5 4.59315 3.84315 3.25 5.5 3.25H14.5C16.1569 3.25 17.5 4.59315 17.5 6.25V13.75C17.5 15.4069 16.1569 16.75 14.5 16.75H5.5C3.84315 16.75 2.5 15.4069 2.5 13.75V6.25Z" fill="#C1D5E9"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M5.03203 6.68804C5.20435 6.42956 5.55359 6.35971 5.81208 6.53203L8.64798 8.42263C9.46673 8.96847 10.5334 8.96847 11.3521 8.42263L14.188 6.53203C14.4465 6.35971 14.7958 6.42956 14.9681 6.68804C15.1404 6.94653 15.0706 7.29576 14.8121 7.46809L11.9762 9.35869C10.7795 10.1564 9.22058 10.1564 8.02394 9.35869L5.18804 7.46809C4.92956 7.29576 4.85971 6.94653 5.03203 6.68804Z" fill="white"></path></svg></svg>
                        </span>
                        <span class="styles_Label__9ZpzP">Địa chỉ email:</span>
                    </p>
                    <span class="item-name">tuyencon2k4@gmail.com</span>
                </div>

                <div class="content-profile">
                    <p class="item-profile">
                        <span class="icon-profile-content">
                            <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="#C1D5E9"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 20 14" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 6C11.6569 6 13 4.65685 13 3C13 1.34315 11.6569 0 10 0C8.34315 0 7 1.34315 7 3C7 4.65685 8.34315 6 10 6ZM10 14C13.3137 14 16 12.6569 16 11C16 9.34315 13.3137 8 10 8C6.68629 8 4 9.34315 4 11C4 12.6569 6.68629 14 10 14ZM4.38165 8.01904C1.91199 8.17134 0 9.22409 0 10.5001C0 11.5521 1.29949 12.4523 3.13963 12.8213C2.72843 12.2645 2.5 11.6483 2.5 11.0001C2.5 9.85669 3.21076 8.81288 4.38165 8.01904ZM17.5001 11.0001C17.5001 11.6483 17.2716 12.2645 16.8604 12.8213C18.7006 12.4523 20.0001 11.5521 20.0001 10.5001C20.0001 9.22409 18.0881 8.17134 15.6184 8.01904C16.7893 8.81288 17.5001 9.85669 17.5001 11.0001ZM13.7183 5.53539C14.2115 4.8134 14.5 3.94039 14.5 3C14.5 2.68794 14.4682 2.3833 14.4077 2.08914C14.5949 2.0312 14.7938 2 15 2C16.1045 2 17 2.89543 17 4C17 5.10457 16.1045 6 15 6C14.5123 6 14.0653 5.82544 13.7183 5.53539ZM5 2C5.20619 2 5.40509 2.0312 5.59223 2.08914C5.53176 2.3833 5.5 2.68794 5.5 3C5.5 3.94039 5.78845 4.8134 6.28171 5.53539C5.93462 5.82544 5.4877 6 5 6C3.89543 6 3 5.10457 3 4C3 2.89543 3.89543 2 5 2Z" fill="#C1D5E9"></path></svg></svg>
                        </span>
                        <span class="styles_Label__9ZpzP">Dân tộc:</span>
                    </p>
                    <span class="item-name">Kinh</span>
                </div>

                <div class="content-profile-btn" style="display: none;">
                    <div class="edit-profile">
                        <button type="button" class="styles_btnDelete row-btn">
                            <span class="icon-profile-btn">
                                <img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjZmQzOTdhIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciICB2aWV3Qm94PSIwIDAgMjYgMjYiIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjE1cHgiPjxwYXRoIGQ9Ik0gMTEgLTAuMDMxMjUgQyAxMC4xNjQwNjMgLTAuMDMxMjUgOS4zNDM3NSAwLjEzMjgxMyA4Ljc1IDAuNzE4NzUgQyA4LjE1NjI1IDEuMzA0Njg4IDcuOTY4NzUgMi4xMzY3MTkgNy45Njg3NSAzIEwgNCAzIEMgMy40NDkyMTkgMyAzIDMuNDQ5MjE5IDMgNCBMIDIgNCBMIDIgNiBMIDI0IDYgTCAyNCA0IEwgMjMgNCBDIDIzIDMuNDQ5MjE5IDIyLjU1MDc4MSAzIDIyIDMgTCAxOC4wMzEyNSAzIEMgMTguMDMxMjUgMi4xMzY3MTkgMTcuODQzNzUgMS4zMDQ2ODggMTcuMjUgMC43MTg3NSBDIDE2LjY1NjI1IDAuMTMyODEzIDE1LjgzNTkzOCAtMC4wMzEyNSAxNSAtMC4wMzEyNSBaIE0gMTEgMi4wMzEyNSBMIDE1IDIuMDMxMjUgQyAxNS41NDY4NzUgMi4wMzEyNSAxNS43MTg3NSAyLjE2MDE1NiAxNS43ODEyNSAyLjIxODc1IEMgMTUuODQzNzUgMi4yNzczNDQgMTUuOTY4NzUgMi40NDE0MDYgMTUuOTY4NzUgMyBMIDEwLjAzMTI1IDMgQyAxMC4wMzEyNSAyLjQ0MTQwNiAxMC4xNTYyNSAyLjI3NzM0NCAxMC4yMTg3NSAyLjIxODc1IEMgMTAuMjgxMjUgMi4xNjAxNTYgMTAuNDUzMTI1IDIuMDMxMjUgMTEgMi4wMzEyNSBaIE0gNCA3IEwgNCAyMyBDIDQgMjQuNjUyMzQ0IDUuMzQ3NjU2IDI2IDcgMjYgTCAxOSAyNiBDIDIwLjY1MjM0NCAyNiAyMiAyNC42NTIzNDQgMjIgMjMgTCAyMiA3IFogTSA4IDEwIEwgMTAgMTAgTCAxMCAyMiBMIDggMjIgWiBNIDEyIDEwIEwgMTQgMTAgTCAxNCAyMiBMIDEyIDIyIFogTSAxNiAxMCBMIDE4IDEwIEwgMTggMjIgTCAxNiAyMiBaIi8+PC9zdmc+"/>
                            </span>
                            <span> Xóa</span>
                        </button>
                        <button type="button" class="styles_btnEdit row-btn">
                            <span class="icon-profile-btn">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA50lEQVR4nK2SsUoDQRCGD1KksdDUmkJsLIJFbuZSBKx8A1NFks73ETS3cyeEiBEi6CvlUT6Zg2ASct4GXBi22P2++XfYJDly9Y2u5tyPPmkdBd4+cyLGqxq4IBocGD0xFldPtF2QvnCRiDFV40sMq62CsQbehzPOXOAJKmMWeMxK+nUds5JrCbzdzDnVwNwT/B7+AftFNZaDko7vUjDeNdfAhzqKYY3wBvSOYnxsokoTrAXnGljtg3FwzkSMdSXYHk4MnOXcucAT7M9BYt5ct/4fTgMPLmgqDXzvwOmMy6p7RPlX3oZ/AAOD6PQzMYRJAAAAAElFTkSuQmCC" alt="create-new">
                            </span>
                            <span> Sửa</span>
                        </button>
                    </div>  
                    <a href="/confirm-information">
                        <button type="button" class="styles_actionsBtn submit">
                            <span>Tiếp tục</span>
                            <span class="icon-profile-btn">
                                <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path></svg></svg>
                            </span>
                        </button>
                    </a>
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
            <a href="/create-profile">
                <button type="button" class="styles_addProfile" style="float: right; font-weight: 500;">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAsklEQVR4nL2STQrCMBBGQwV39Q7aQ9i13XsFf9d6OX9uIt7myQcjRJy0UaIPvk3SPmYyE8I/ABqgszSf/jwC9sCdd3S20zdDkglwZZgLUPdVkiN5cgYqT6R2PI4Wj40n8t5ELC0eN286KeaWFNNYpPHGHKyKFhhbWjvTXUxXSrQo31qxxxbA9ovxr0JiIbWxuZzchTRZbRubI6ldSSSrtLHq33sTYJ2spEc603gtr9P5FQ/RdefopMW7XwAAAABJRU5ErkJggg==" alt="add--v1">
                    <span>Thêm hồ sơ</span>
                </button>
            </a>
        </div>

    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const appointmentForm = document.querySelector('.content-appointment-form');
        const profileBtn = document.querySelector('.content-profile-btn');

        appointmentForm.addEventListener('click', () => {
            if (profileBtn.style.display === 'none' || profileBtn.style.display === '') {
                profileBtn.style.display = 'flex'; 
                profileBtn.style.opacity = '0';
                setTimeout(() => {
                    profileBtn.style.transition = 'opacity 0.3s ease-in-out'; // 
                    profileBtn.style.opacity = '1';
                }, 10); 
            }
        });
    });
</script>
@endsection
@push('scripts')
@endpush


