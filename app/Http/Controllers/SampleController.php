<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Answer;
use App\Profile;
use App\Question;


class SampleController extends Controller
{



    public function index()
    {
        $questionList = [
            'Why laravel?',
            'Why docker?',
            'How to share data',

        ];


        return view('/welcome', compact('questionList','latestQuestion'));
    }



}
