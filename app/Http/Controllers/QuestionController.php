<?php

namespace App\Http\Controllers;

use App\Models\Question;

class QuestionController extends Controller
{
    public function store(): \Illuminate\Http\RedirectResponse
    {
        $validate = request()->validate([
            'question' => ['required', 'min:10'],
        ]);

        Question::query()->create($validate);

        return to_route('dashboard');
    }
}
