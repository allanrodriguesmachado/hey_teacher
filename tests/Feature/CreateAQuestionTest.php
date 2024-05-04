<?php

use function Pest\Laravel\assertDatabaseCount;

it('should be able to create a new question bigger than 255 characters', function () {
    $user = \App\Models\User::factory()->create();
    \Pest\Laravel\actingAs($user);

    $request = \Pest\Laravel\post(route('question.store'), [
        'question' => str_repeat('*', 260) . '?',
    ]);

    $request->assertRedirect('dashboard');
    \Pest\Laravel\assertDatabaseCount('questions', 1);
    \Pest\Laravel\assertDatabaseHas('questions', [
        'question' => str_repeat('*', 260) . '?',
    ]);
});

it('should check if ends with question mark?', function () {
    $request = \Pest\Laravel\post(route('question.store'), [
        'question' => str_repeat('*', 10),
    ]);

    $request->assertSessionHasErrors([
        'question' => 'Are you sure that is a question? It is missing the question mark in the end.',
    ]);
    assertDatabaseCount('questions', 0);
});

it('should have at least 10 characters', function () {
    $request = \Pest\Laravel\post(route('question.store'), [
        'question' => str_repeat('*', 8) . '?',
    ]);

    $request->assertSessionHasErrors(['question' => __('validation.min.string', ['min' => 10, 'attribute' => 'question'])]);
    assertDatabaseCount('questions', 0);

});
