@extends('layout')
@push('styles')
    <link rel="stylesheet" href="./assets/css/create-profile.css" />
@endpush
@section('contents')

<div id="create-profile">
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
                        <a>Tạo hồ sơ bệnh nhân</a>
                    </span>
                </li>
                <div id="last"></div>
            </ul>
        </div>
        
        <div class="appointment-form">
            <div class="title-h1">
                <h1 class="name-h1">TẠO MỚI HỒ SƠ</h1>
            </div>

                <div class="never-ever">
                    <div class="ever">
                        <div class="name">Đã từng khám</div>
                    </div>
                    <div class="never">
                        <div class="name">Chưa từng khám</div>
                    </div>
                </div>

            {{-- chưa từng --}}
            <div class="content-appointment-form">
                <div class="title-content">
                    <p class="title-1">Vui lòng cung cấp thông tin chính xác để được phục vụ tốt nhất.</p>
                    <p class="title-2">(*) Thông tin bắt buộc nhập</p>
                </div>
                <div class="title-content-form">
                    <p>Thông tin chung</p>
                    <div class="border-center"></div>
                </div>
                <div class="content-form">
                    <div class="form-row1">
                        <div class="item-1">
                            <label for="name" class="" title="">Họ và tên (có dấu) <sup class="note">*</sup></label>
                            <input type="text" placeholder="Ví dụ: Nguyễn Văn Bảo" id="name" class="ant-input ant-input-lg">
                        </div>
                        <div class="item-1">
                            <label for="name" class="" title="">Số điện thoại<sup class="note">*</sup></label>
                            <input type="text" placeholder="Vui lòng nhập số điện thoại" id="mobile" class="ant-input ant-input-lg">
                        </div>
                        <div class="item-1">
                            <label for="name" class="" title="">Nghề nghiệp (có dấu) <sup class="note">*</sup></label>
                            <input type="text" placeholder="Nhập nghề nghiệp" id="job" class="ant-input ant-input-lg">
                        </div>  
                        <div class="item-1">
                            <label for="name" class="" title="">Địa chỉ Email <sup class="note">*</sup></label>
                            <input type="email" placeholder="Nhập địa chỉ email để nhận phiếu khám" id="email" class="ant-input ant-input-lg">
                        </div>
                    </div>

                    <div class="form-row2">
                        <div class="item-2">
                            <label for="date" class="" title="">Ngày sinh (năm/tháng/ngày) <sup class="note">*</sup></label>
                            <div class="item-22">
                                <input type="number" id="year" placeholder="Năm" min="1900" max="2100">
                                <input type="number" id="month" placeholder="Tháng" min="1" max="12">
                                <input type="number" id="day" placeholder="Ngày" min="1" max="31">
                            </div>
                        </div>
                        <div class="item-2">
                            <label for="sex" class="" title="">Giới tính<sup class="note">*</sup></label>
                            <input type="text" placeholder="Chọn giới tính" id="sex" class="ant-input ant-input-lg">
                        </div>
                        <div class="item-2">
                            <label for="name" class="" title="">Mã định danh/CCCD/Passport <sup class="note">*</sup></label>
                            <input type="text" placeholder="Vui lòng nhập Mã định danh/CCCD/Passport" id="cmnd" class="ant-input ant-input-lg">
                        </div>  
                        <div class="item-2">
                            <label for="name" class="" title="">Dân tộc <sup class="note">*</sup></label>
                            <input type="nation" placeholder="Kinh" id="nation" class="ant-input ant-input-lg">
                        </div>
                    </div>
                </div>
                <div class="content-form-3">
                    <div class="address-cccd">
                        <div class="title-content-form">
                            <p>Địa chỉ theo CCCD</p>
                            <div class="border-center"></div>
                        </div>
                        <div class="form-row3">
                            <div class="item-3">
                                <label for="name" class="" title="">Tỉnh/Thành <sup class="note">*</sup></label>
                                <input type="text" placeholder="Chọn tình thành" id="name" class="ant-input ant-input-lg">
                            </div>
                            <div class="item-3">
                                <label for="name" class="" title="">Quận/Huyện <sup class="note">*</sup></label>
                                <input type="text" placeholder="Chọn quận huyện" id="mobile" class="ant-input ant-input-lg">
                            </div>
                            <div class="item-3 item_3">
                                <label for="name" class="" title="">Phường/Xã <sup class="note">*</sup></label>
                                <input type="text" placeholder="Chọn xã phường" id="job" class="ant-input ant-input-lg">
                            </div>  
                            <div class="item-3">
                                <label for="name" class="" title="">Số nhà/Tên đường/Ấp thôn xóm <sup class="note">*</sup></label>
                                <p>(không bao gồm tỉnh/thành, quận/huyện, phường/xã)</p>
                                <input type="email" placeholder="Nhập số nhà, tên đường, ấp thôn xóm,..." id="email" class="ant-input ant-input-lg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-submit">
                    <button type="reset" class="btn-reset">
                        <span>Nhập lại</span>
                    </button>
                    <button type="button" class="btn-create">
                        <span>Tạo mới</span>
                    </button>
                </div>
            </div>

            {{-- đã từng --}}
            <div class="content-appointment-form-2">
                <div class="row_11">
                    <h3 class="center-content">Nhập mã số bệnh nhân/ Mã số BHYT</h3>
                    <form class="center-content form">
                        <input type="text" placeholder="Nhập mã số bệnh nhân / Mã số BHYT">
                        <button type="button" class="btn-create">
                            <span>Tìm kiếm</span>
                        </button>
                    </form>
                    <a href="">Tôi mất mã số bệnh nhân của mình</a>
                </div>
                <div class="row_22">
                    <h4>Xem lại cách tìm mã số bệnh nhân</h4>
                    <div class="styles_instruct__Iwonx">
                        <span>(Click để xem chi tiết</span><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M459.15 269.75a133.197 133.197 0 0 1-55.862 179.975l-42.782 22.541-10.52 5.533a71.277 71.277 0 0 1-62.966 1.685l-167.077-71.38 15.733-46.676 99.363 19.194-51.458-97.78-82.843-157.411 40.357-21.232 82.844 157.457 19.934-10.485-36.521-69.445 40.335-21.22 36.52 69.445 19.935-10.485-28.2-53.598 40.358-21.232 28.2 53.598 19.945-10.576-19.354-36.886 40.346-21.174 19.354 36.885 54.348 103.301zM73.268 146.674a60.03 60.03 0 0 1 42.361-102.459 60.098 60.098 0 0 1 56.58 80.169l10.588 20.013A78.29 78.29 0 0 0 115.708 26a78.233 78.233 0 0 0-5.635 156.262L99.428 162.02a59.688 59.688 0 0 1-26.16-15.346z"></path></svg>)
                    </div>
                    <div class="img_BHYT">
                        <img alt="" class="ant-image-img" src="https://prod-partner.s3-hcm-r1.longvan.net/33b81161-03c6-4f57-9879-487b51a4e625-da_lieu.png" width="100%" height="250" style="height: 250px; object-fit: fill;">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const everButton = document.querySelector('.ever');
    const neverButton = document.querySelector('.never');
    const contentForm = document.querySelector('.content-appointment-form');
    const contentForm2 = document.querySelector('.content-appointment-form-2');
    const neverEverContainer = document.querySelector('.never-ever');

    contentForm.classList.add('hidden');
    contentForm2.classList.remove('hidden'); 
    everButton.classList.add('active'); 
    neverButton.classList.remove('active'); 
    neverEverContainer.style.display = 'grid';

    everButton.addEventListener('click', function () {
        contentForm.classList.add('hidden') 
        contentForm2.classList.remove('hidden');
        everButton.classList.add('active'); 
        neverButton.classList.remove('active'); 
        neverEverContainer.style.display = 'grid'; 
    });

    neverButton.addEventListener('click', function () {
        contentForm.classList.remove('hidden'); 
        contentForm2.classList.add('hidden');
        neverButton.classList.add('active'); 
        everButton.classList.remove('active');
    });
});
</script>
@endsection
@push('scripts')
@endpush
