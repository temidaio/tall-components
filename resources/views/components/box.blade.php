{{--
    Main TallStack component, 
    designed to display basic cell for render content

    Basic example:
    <Box>Content</Box>
    rendering content with default spaced box
--}}

@props([
    'className' => null,
    'color' => null,
    'hover' => null,
    'rounded' => false,
    'shadow' => false,
    'outline' => false,
    'spacing' => 'md',
])

@php
    $classes = [];
    $classes[] = $color ? [
        'bg-tahiti-500 border-tahiti-500' => $color === 'primary',
        'bg-rose-500 border-rose-500' => $color === 'secondary',
        'bg-elephant-900 border-elephant-900' => $color === 'dark',
        'bg-gray-500 border-gray-500' => $color === 'light',
        'bg-aloes-500 border-aloes-500' => $color === 'success',
        'bg-chili-500 border-chili-500' => $color === 'error',
        'bg-dakkar-500 border-dakkar-500' => $color === 'warning',
        'bg-ocean-500 border-ocean-500' => $color === 'info',
        'bg-text-500 border-text-500' => $color === 'text',
    ] : [];

    $classes[] = $hover ? [
        'transition-colors' => $hover,
        'hover:bg-opacity-80 active:bg-opacity-60' => $hover === 'active',
        'bg-opacity-10 hover:bg-opacity-20 active:bg-opacity-30' => $hover === 'inverse',
    ] : [];

    $classes[] = $spacing ? [
        'px-1.5 py-1.5' => $spacing === 'sm',
        'px-4 py-4' => $spacing === 'md',
    ] : [];

    $classes[] = $rounded ? [
        'rounded-lg' => $rounded,
    ] : [];

    $classes[] = $outline ? [
        'border' => $outline,
    ] : [];

    $classes[] = $className ? [
        $className
    ] : [];

@endphp

<div @class(
    array_merge(...$classes)
)>
    {{ $slot }}
</div>
