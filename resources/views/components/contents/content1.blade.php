@once
    @push('styles')
        <link rel="stylesheet" href="./assets/css/contents/content1.css">
    @endpush
@endonce
<div class="home content1 relative">
    <x-title.title2 :title="$titleC" :span="$spanC" spanClass="color-primary" />

    <div class="app">
        <div class="ios">
            <a href="###">
                <img src="./assets/imgs/icon_ios.svg" alt="">
            </a>
        </div>
        <div class="androi">
            <a href="###">
                <img src="./assets/imgs/icon_google_play.svg" alt="">
            </a>
        </div>
    </div>

    <div class="content-container">
        <div class="content-item">
            @for ($i = 1; $i < 4; $i++)
                <div class="item">
                    <div class="content">
                        <h3 class="title">{{ $titleItem ?? 'Lấy số thứ tự khám nhanh trực tuyến' }}</h3>

                        @if ($subTitleItem ?? [])
                            @foreach ($subTitleItem as $item)
                                <span>{{ $item }}</span>
                            @endforeach
                        @else
                            <span>Đăng ký khám / tái khám nhanh theo ngày</span>
                            <span>Đăng ký khám theo bác sĩ chuyên khoa</span>
                            <span>Tái khám theo lịch hẹn</span>
                        @endif

                    </div>
                    <div class="img">
                        <img src="./assets/imgs/{{ $imgItem ?? 'bae71420-d9ef-48b7-91a9-0151c50c73da-fcf47d13-a9c5-4be8-aa6c-4d4e9b162c19-icon_dang_ky.svg' }}"
                            alt="">
                    </div>
                </div>
            @endfor
        </div>

        <div class="content-item">
            <img src="{{ $bgImg ?? './assets/imgs/ellipse.webp' }}" alt="{{ $bgAlt ?? '' }}">
            <img src="{{ $img ?? './assets/imgs/858c322c-7f26-48d3-a5df-e633e9a3592e-20240325-095443.webp' }}"
                alt="{{ $alt ?? '' }}">
        </div>

        <div class="content-item">
            @for ($i = 1; $i < 4; $i++)
                <div class="item">
                    <div class="img">
                        <img src="./assets/imgs/{{ $imgItem ?? 'bae71420-d9ef-48b7-91a9-0151c50c73da-fcf47d13-a9c5-4be8-aa6c-4d4e9b162c19-icon_dang_ky.svg' }}"
                            alt="">
                    </div>
                    <div class="content">
                        <h3 class="title">{{ $titleItem ?? 'Lấy số thứ tự khám nhanh trực tuyến' }}</h3>

                        @if ($subTitleItem2 ?? [])
                            @foreach ($subTitleItem2 as $item)
                                <span>{{ $item }}</span>
                            @endforeach
                        @else
                            <span>Đăng ký khám / tái khám nhanh theo ngày</span>
                            <span>Đăng ký khám theo bác sĩ chuyên khoa</span>
                            <span>Tái khám theo lịch hẹn</span>
                        @endif

                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
