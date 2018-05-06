<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AnswerQuestionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {   /*Answer question*/
        $this->browse(function (Browser $browser) {
            $browser->visit('/questions/1')
                ->type('email', 'jc@123.com')
                ->type('password', '123123')
                ->press('Login')
                ->clicklink('Answer Question')
                ->type('#body', 'test123')
                ->click('button[type="submit"]')
                ->assertSee('123');
        });
    }
}
