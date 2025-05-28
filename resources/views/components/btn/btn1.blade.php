@once
    <style>
        .order {
            margin-top: 10px;
        }

        .order button {
            width: 100%;
            height: 38px;
            background-color: var(--color-primary);
            color: var(--color-accent);
            border: none;
            border-radius: var(--radius-base);
            font-weight: var(--fw-bold);
            font-size: var(--fs-base);
            transition: background 0.5s ease, color 0.5s ease
        }

        .order button:hover {
            background: white;
            border: 1px solid var(--color-primary);
            color: var(--color-primary);
        }

        {{ $style ?? '' }}
    </style>
@endonce
<div class="order">
    <a href="/medical-booking">
        <button class="{{ $class ?? '' }}">{{ $content ?? 'Đặt khám ngay' }}</button>
    </a>
</div>
