<x-card>
    <x-slot:title>
        <h2 class="h3">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="content">
        {!! $post->content !!}
        
        <small class="d-block text-end mt-2 text-muted">
            {{ now()->format('d m Y H:i:s') }}
        </small>
    </div>

    @if($to)
        {{-- :params="['blog' => $post->id]" --}}
        <x-link :to="$to" :params="[$post->id]">
            {{ __('Читать...') }}
        </x-link>
    @endif
</x-card>
