<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        /*Register a user then login to test
        whether it can redirect to the home page*/
        $this->browse(function ($browser) {

            $browser->visit('/register')
                ->type('email','jc@126.com')
                ->type('password','123123')
                ->type('#password-confirm','123123')
                ->click('button[type="submit"]')
                ->assertPathIs('/home');
        });
    }
}
