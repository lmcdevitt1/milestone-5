<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Laravel\Fortify\Features;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    protected function skipUnlessFortifyHas(string $feature): void
    {
        if (! Features::enabled($feature)) {
            $this->markTestSkipped("Fortify feature [{$feature}] is not enabled.");
        }
    }
}
