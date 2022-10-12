@props([
    'class'    => '',
    'type'     => 'submit',
    'disabled' => false,
])

<button type="{{ $type }}"
    @class([
        $class,
    ])
    @disabled($disabled)
>
    {{ $slot }}
</button>
