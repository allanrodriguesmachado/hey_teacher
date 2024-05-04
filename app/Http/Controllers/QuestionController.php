<?php

namespace App\Http\Controllers;

use App\Models\Question;

class QuestionController extends Controller
{
    public function store(): \Illuminate\Http\RedirectResponse
    {
        Question::query()->create(
            request()->validate([
                'question' => ['required', 'min:10'],
            ])
        );

        return to_route('dashboard');
    }
}
