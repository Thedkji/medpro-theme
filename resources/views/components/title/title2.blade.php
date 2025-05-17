<style>
    h2.title-component {
        color: var(--color-secondary);
        font-size: clamp(18px,2.5vw,var(--fs-7xl));
        /*1.75rem; 28px*/
        text-align: center;
        text-transform: uppercase;
    }
</style>
<h2 class="title-component {{ $class ?? '' }}" style="{{ $style ?? '' }}">
    {{ $title ?? 'Được tin tưởng hợp tác và đồng hành' }} <span class="{{ $spanClass ?? '' }}">{{ $span ?? '' }}</span></h2>
