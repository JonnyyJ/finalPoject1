<?php

namespace Tests\Browser;
use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        /*Create a user on app then login to test
        whether it can redirect to the home page*/


            $this->browse(function ($browser)  {
                $browser->visit('/login')
                    ->type('email', 'jc@123.com')
                    ->type('password', '123123')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }
}
