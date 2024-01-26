<div {{ $attributes->class([
    'card',
    'p-4',
])}}>
    <div class="card-caption">
        {{ $title ?? __('Card title') }}
    </div>

    <div class="card-content pt-3">
        {{ $slot }}
    </div>
</div>
