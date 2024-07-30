<?php

namespace App\Http\Controllers;

class QuestionController extends Controller
{
    public function store(): \Illuminate\Http\RedirectResponse
    {
        dd(\request()->all());

        return to_route('dashboard');
    }
}
