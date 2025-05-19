@once
    @push('styles')
        <link rel="stylesheet" href="./assets/css/grids/grid1.css">
    @endpush

    <style>
        {{ $style ?? '' }}
    </style>
@endonce
<x-title.title2 :title="$titleC" />
<div class="grid1">
    @if (!empty($grids1) && count($grids1) > 0)
        {{-- Item đầu tiên --}}
        @if (!empty($grids1[0]))
            @php $first = $grids1[0]; @endphp
            <div class="grid-item grid-item1">
                <a href="{{ $first->link ?? '###' }}">
                    <div class="item">
                        <div class="img-content">
                            <img src="{{ $first->img ?? './assets/imgs/default.webp' }}"
                                alt="{{ $first->alt ?? ($first->name ?? ($first->title ?? '')) }}">
                        </div>
                        <div class="content">
                            <div class="title">
                                <h3>{{ $first->title ?? 'Tiêu đề mặc định' }}</h3>
                            </div>
                            <div class="time">
                                <span>{{ $first->date ?? '07/05/2025, 12:18' }}</span>
                                <span>-</span>
                                <span>{{ $first->author ?? 'Uyển Nhi' }}</span>
                            </div>
                            <div class="sub-title">
                                <p>{{ $first->sub_title ?? 'Mô tả mặc định' }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endif

        {{-- Các item còn lại --}}
        <div class="grid-item grid-item2">
            @foreach ($grids1 as $index => $grid1)
                @if ($index === 0)
                    @continue
                @endif
                <a href="{{ $grid1->link ?? '###' }}">
                    <div class="item">
                        <div class="img-content">
                            <img src="{{ $grid1->img ?? './assets/imgs/default.webp' }}"
                                alt="{{ $grid1->alt ?? ($grid1->name ?? ($grid1->title ?? '')) }}">
                        </div>
                        <div class="content">
                            <div class="title">
                                <h3>{{ $grid1->title ?? 'Tiêu đề mặc định' }}</h3>
                            </div>
                            <div class="time">
                                <span>{{ $grid1->date ?? '07/05/2025, 12:18' }}</span>
                                <span>-</span>
                                <span>{{ $grid1->author ?? 'Uyển Nhi' }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <div class="grid-item grid-item1">
            <a href="###">
                <div class="item">
                    <div class="img-content">
                        <img src="./assets/imgs/topic_da17bfa1670a4c23a30a765fe98a128d_3fbf61e62f.webp" alt="">
                    </div>

                    <div class="content">
                        <div class="title">
                            <h3>Nội soi dạ dày, đại tràng không đau tại Doctor Check có tốt không?</h3>
                        </div>
                        <div class="time">
                            <span>07/05/2025, 12:18</span>
                            <span>-</span>
                            <span>Uyển Nhi</span>
                        </div>
                        <div class="sub-title">
                            <p>Bạn đang tìm kiếm địa chỉ nội soi dạ dày, đại tràng không đau? Tham khảo ngay Trung Tâm
                                Nội
                                Soi
                                Tiêu Hóa Doctor Check trên Medpro!
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid-item grid-item2">
            @for ($i = 1; $i < 5; $i++)
                <a href="###">
                    <div class="item">
                        <div class="img-content">
                            <img src="./assets/imgs/1747357511550_ab6445e8e5.webp" alt="">
                        </div>

                        <div class="content">
                            <div class="title">
                                <h3>Nội soi dạ dày, đại tràng không đau tại Doctor Check có tốt không?</h3>
                            </div>
                            <div class="time">
                                <span>07/05/2025, 12:18</span>
                                <span>-</span>
                                <span>Uyển Nhi</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endfor
        </div>
    @endif
</div>
<x-btn.view-all />
