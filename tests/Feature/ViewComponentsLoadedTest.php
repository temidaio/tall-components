<?php

use Illuminate\Support\Facades\Blade;

test('button view component is registered', function () {
    $output = Blade::render('<x-tall::button />');

    assertStringContainsString('button', $output);
});

test('button.primary view component is registered', function () {
    $output = Blade::render('<x-tall::button.primary />');

    assertStringContainsString('bg-chili-200', $output);
});
