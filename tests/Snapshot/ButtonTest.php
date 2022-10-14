<?php

use Illuminate\Support\Facades\Blade;
use function Spatie\Snapshots\{assertMatchesSnapshot};

test('button is registered and matches the snapshot', function () {
    $html = Blade::render('<x-tall::button />');

    assertMatchesSnapshot($html);
});

test('button.primary is registered and matches the snapshot', function () {
    $html = Blade::render('<x-tall::button.primary />');

    assertMatchesSnapshot($html);
});
