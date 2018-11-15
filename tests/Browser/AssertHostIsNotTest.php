<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertHostIsNotTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertHostIsNot()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertHostIsNot('localhost');
        });
    }
}
