<?php

use App\Models\User;

it('Should be able to create a new question bigger than 255 characters', function () {
    $user = User::factory()->create();

    \Pest\Laravel\actingAs($user);

    $request = \Pest\Laravel\post(route('question.store'), [
        'question' => str_repeat('*', 250) . '?',
    ]);

    $request->assertRedirect(route('dashboard'));
    \Pest\Laravel\assertDatabaseCount('questions', 1);
    \Pest\Laravel\assertDatabaseHas('questions', ['question' => str_repeat('*', 260) . '?']);
});

it('Should check if ends with question mark?', function () {

})->todo();

it('Should have at least 10 characters', function () {

})->todo();
