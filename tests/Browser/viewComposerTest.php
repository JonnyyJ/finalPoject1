<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class viewComposerTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'jc@123.com')
                ->type('password', '123123')
                ->press('Login')
                ->assertSeeLink('How to share data');
        });
    }
}
