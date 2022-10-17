<?php

use Illuminate\Support\Facades\Blade;
use function Spatie\Snapshots\{assertMatchesSnapshot};

test('box is registered and matches the snapshot', function () {
    $html = Blade::render('<x-tall::box />');

    assertMatchesSnapshot($html);
});

test('box with undefined color', function () {
    $html = Blade::render('<x-tall::box :color="$color" />', ['color'=>0]);
    assertMatchesSnapshot($html);
});

test('box with defined color', function () {
    $html = Blade::render('<x-tall::box :color="$color" />', ['color'=>'primary']);
    assertMatchesSnapshot($html);
});
