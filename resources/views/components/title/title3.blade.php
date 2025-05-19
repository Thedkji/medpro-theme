@once
    <style>
        h2.title-component {
            color: var(--color-secondary);
            font-size: var(--fs-7xl);
            /*1.75rem; 28px*/
            text-align: center;
            text-transform: uppercase;
        }

        p.subtitle-component {
            color: var(--color-disabled2);
            font-size: var(--fs-xl);
            text-align: center;
            margin: 10px 0 0 0;
        }
    </style>
@endonce
<h2 class="title-component {{ $class ?? '' }}" style="{{ $style ?? '' }}">
    {{ $title ?? 'Được tin tưởng hợp tác và đồng hành' }} <span class="{{ $spanClass ?? '' }}">{{ $span ?? '' }}</span>
</h2>
<p class="color-disabled subtitle-component">{{ $subTitle ?? '' }}</p>
