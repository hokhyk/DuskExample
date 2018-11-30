<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertSelectedTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/test/select')
                    ->assertSelected('select_target', 'should_select');
        });
    }
}
