@push('styles')
    <link rel="stylesheet" href="./assets/css/banner-info/banner-info1.css">
@endpush
<style>
    .banner-info1 {
        background-image: url('./assets/imgs/0f04db66-ff2a-49b5-9f63-e18f4c7ef354-bg-contact-desktop.webp');
        background-size: 100% 100%;
        background-repeat: no-repeat;
        height: 288px;
        border-radius: var(--radius-lg);
    }

    @media screen and (max-width: 1200px) {
        .banner-info1 {
            background-size: auto 100%;
            background-position: 100%;
        }

        .banner-info1 .content {
            width: 100%;
            height: 100%;
            justify-content: center;
            gap: 20px;
            margin-left: auto;
        }

        .banner-info1 .content .item:nth-child(3) {
            margin-right: unset;
        }
    }

    @media screen and (max-width: 960px) {
        .banner-info1 {
            height: max-content;
            padding-block: 30px;
        }

        .banner-info1 .content {
            width: 70%;
            gap: 20px;
            margin-left: auto;
            flex-wrap: wrap;
            margin: auto;
        }
        .banner-info1 .content .item:nth-child(2) p:first-child{
            font-size: var(--fs-4xl);
        }
        .banner-info1 .content .item:nth-child(2) p:last-child{
            font-size: var(--fs-8xl);
        }
        .banner-info1 .content .item:nth-child(2){
            margin-top: 20px;
        }
    }
</style>
<div class="banner-info1">
    <div class="content">
        <div class="item">
            <img src="./assets/imgs/mobile.svg" alt="">
        </div>
        <div class="item">
            <p>CÁC HÌNH THỨC HỖ TRỢ</p>
            <p>1900-2115</p>
        </div>
        <div class="item">
            <a href="###">
                <img src="./assets/imgs/038be8dc-47bd-43a8-a1a4-fb5e5e804b1a-zalo.webp" alt="">
                <span>Zalo</span>
            </a>

            <a href="###">
                <img src="./assets/imgs/038be8dc-47bd-43a8-a1a4-fb5e5e804b1a-zalo.webp" alt="">
                <span>Facebook</span>
            </a>
        </div>
    </div>
</div>
