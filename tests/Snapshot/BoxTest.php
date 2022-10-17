<?php

use Illuminate\Support\Facades\Blade;
use function Spatie\Snapshots\{assertMatchesSnapshot};

test('box is registered and matches the snapshot', function () {
    $html = Blade::render('<x-tall::box />');

    assertMatchesSnapshot($html);
});
