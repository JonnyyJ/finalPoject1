<?php

namespace Tests\Browser;
use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateQuestion_Test extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        /*The user creates question by clicking on buttons
        to test AJAX Calls*/

        $this->browse(function ($browser)  {
            $browser->visit('/login')
                ->type('email', 'jc@123.com')
                ->type('password', '123123')
                ->press('Login')
                ->clicklink('Create a Question')
                ->type('#body','test123')
                ->click('button[type="submit"]')
                ->assertPathIS('/home');



        });
    }
}
