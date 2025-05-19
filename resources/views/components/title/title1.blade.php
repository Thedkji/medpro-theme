@once
    <style>
        h1.title-component {
            color: var(--color-secondary);
            font-size: var(--fs-9xl);
            /*1.75rem; 28px*/
            text-align: center
        }
    </style>
@endonce
<h1 class="title-component {{ $class ?? '' }}" style="{{ $style ?? '' }}">
    {{ $title ?? 'Kết nối Người Dân với Cơ sở & Dịch vụ Y tế hàng đầu' }}</h1>
