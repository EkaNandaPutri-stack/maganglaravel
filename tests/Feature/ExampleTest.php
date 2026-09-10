<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('the program studi page does not render raw route code', function () {
    $response = $this->get('/program-studi');

    $response->assertStatus(200)
        ->assertSee('Program Studi')
        ->assertDontSee("Route::get('/program-studi'");
});
