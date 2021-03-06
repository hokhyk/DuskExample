<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertPathIsNotTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertPathIsNot()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome')
                    ->assertPathIsNot('/');
        });
    }
}
