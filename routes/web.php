<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/about', function () {
    return Inertia('About', [
        'name' => 'John Doe',
        'age' => 30,
        'location' => 'USA',
        'sex' => "male",
    ]);
});

route::inertia('/contact', 
                'Contact', 
                ['email' => 'johnDoe@example']
);

route::inertia('/services', 
                'Services', 
                ['services' => ['Web Development', 'Mobile Development', 'SEO']]
);
