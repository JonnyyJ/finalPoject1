<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class QuestionComposer
{
    public $questionList = [];

    /**
     * Create a question composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->questionList = [
            'Why laravel?',
            'Why docker?',
            'How to share data',
        ];

    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('latestQuestion', end($this->questionList));
    }

}