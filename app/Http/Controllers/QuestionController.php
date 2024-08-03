<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Closure;

class QuestionController extends Controller
{
    public function store(): \Illuminate\Http\RedirectResponse
    {
        $validate = request()->validate([
            'question' => ['required', 'min:10'],
            'question' => [
                'required',
                'min:10',
                function (string $attribute, mixed $value, Closure $fail) {
                    if ($value['strlen'($value) - 1] !== '?') {
                        $fail('Are you sure that is a question? It is missing the question mark in the end.');
                    }
                }],
        ]);

        Question::query()->create($validate);

        return to_route('dashboard');
    }
}
