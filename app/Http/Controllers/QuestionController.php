<?php

namespace App\Http\Controllers;

class QuestionController extends Controller
{
    public function store()
    {
        dd(\request()->get('question'));

        return to_route('dashboard');
    }
}
