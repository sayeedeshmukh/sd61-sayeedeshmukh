<?php
protected $middlewareGroups = [
    'web' => [
        // Other middleware...
        \App\Http\Middleware\LanguageMiddleware::class,
    ],
];
