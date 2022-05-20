<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'button'])->except(['label']) }}
>
    {{ $label ?? 'Submit' }}
</button>
