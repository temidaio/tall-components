<?php

use Illuminate\Support\Facades\Blade;
use function Spatie\Snapshots\{assertMatchesSnapshot};

test('button view component is registered', function () {
    $html = Blade::render('<x-tall::button />');

    assertMatchesSnapshot($html);
});

test('button.primary view component is registered', function () {
    $html = Blade::render('<x-tall::button.primary />');

    assertMatchesSnapshot($html);
});
