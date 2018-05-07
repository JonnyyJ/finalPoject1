<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
        $questionList = [
            '123',
            '321',
            '111',

        ];

        return view('welcome', compact('questionList'));
    }
}
