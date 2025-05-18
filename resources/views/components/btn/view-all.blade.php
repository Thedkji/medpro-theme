<style>
{{ $style ?? '' }}
</style>
<div class="view-all">
    <a href="{{ $link ?? '#' }}">
        <button class="{{ $btnClass ?? '' }}">
            <span>{{ $content ?? 'Xem tất cả' }}</span>
            <img src="./assets/imgs/{{ $img ?? 'direction-left.svg' }}" alt="">
            {{ $slot ?? '' }}
        </button>
    </a>
</div>