@once
    @push('styles')
        <link rel="stylesheet" href="./assets/css/lists/list2.css">
    @endpush
    <style>
        {{ $style ?? '' }}
    </style>
@endonce
<div class="home list2 relative">
    <x-title.title3 :title="$titleC" :subTitle="$subTitleC" />

    <div class="list-container">
        @if (!empty($lists2) && count($lists2) > 0)
            @foreach ($lists2 as $list2)
                <div class="list-item">
                    <div class="img">
                        <a href="{{ $list2->link ?? '###' }}">
                            <img src="{{ $list2->img ?? '' }}" alt="{{ $list2->alt ?? $list2->name ?? $list2->title ?? '' }}">
                        </a>
                    </div>
                </div>
            @endforeach
        @else
            <div class="list-item">
                <div class="img">
                    <a href="###">
                        <img src="./assets/imgs/thanh-nien-logo.webp" alt="">
                    </a>
                </div>
            </div>
            <div class="list-item">
                <div class="img">
                    <a href="###">
                        <img src="./assets/imgs/tuoi-tre-logo.webp" alt="">
                    </a>
                </div>
            </div>
            <div class="list-item">
                <div class="img">
                    <a href="###">
                        <img src="./assets/imgs/dan-tri.webp" alt="">
                    </a>
                </div>
            </div>
            <div class="list-item">
                <div class="img">
                    <a href="###">
                        <img src="./assets/imgs/nguoi-lao-dong-logo.webp" alt="">
                    </a>
                </div>
            </div>
            <div class="list-item">
                <div class="img">
                    <a href="###">
                        <img src="./assets/imgs/htv.webp" alt="">
                    </a>
                </div>
            </div>
            <div class="list-item">
                <div class="img">
                    <a href="###">
                        <img src="./assets/imgs/syt_can_tho.webp" alt="" style="width: 55px;height: 54px;">
                    </a>
                </div>
            </div>
            <div class="list-item">
                <div class="img">
                    <a href="###">
                        <img src="./assets/imgs/vtv1-logo.webp" alt="">
                    </a>
                </div>
            </div>
            <div class="list-item">
                <div class="img">
                    <a href="###">
                        <img src="./assets/imgs/thvl-logo.webp" alt="">
                    </a>
                </div>
            </div>
        @endif
    </div>
</div>
