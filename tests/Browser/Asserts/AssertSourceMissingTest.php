<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertSourceMissingTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertSourceMissing()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSourceMissing('<div class="title m-b-md">
                    John Cena
                </div>');
        });
    }
}
