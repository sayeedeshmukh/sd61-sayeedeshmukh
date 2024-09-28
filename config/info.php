<?php
return [
    'sitename' => 'Sayee Deshmukh',
    'navlinks' => [
        [
            'id' => 'college',
            'name' => 'About Me',
            'url' => '/about',
            'image' => 'images/aboutme.jpg',
        ],
        [
            'id' => 'technology',
            'name' => 'Education',
            'url' => '/education',
            'image' => 'images/edu.jpg',
        ],
        [
            'id' => 'events',
            'name' => 'Skills',
            'url' => '/skills',
            'image' => 'images/skills.jpg',
        ],
        [
            'id' => 'events',
            'name' => 'Contact',
            'url' => '/contact',
            'image' => 'images/contact.jpg',
        ],
    ],
    'footerlinks' => [
        [
            'name' => 'Home',
            'url' => '/',
        ],
        [
            'name' => 'About Me',
            'url' => '/about',
        ],
        [
            'name' => 'Contact',
            'url' => '/contact',
        ],
    ],
    'sociallinks' => [
        [
            'title' => 'Instagram',
            'name' => 'icons.instagram',
            'url' => 'https://www.instagram.com/pixieeedusstt/',
        ],
        [
            'title' => 'Linkedin',
            'name' => 'icons.linkedin',
            'url' => 'https://www.linkedin.com/in/sayee-deshmukh-aa7633290/',
        ],
    ],
    'routes' => [
        [
            'name' => 'welcome',
            'path' => '/',
            'view' => 'welcome',
        ],
        [
            'name' => 'about',
            'path' => '/about',
            'view' => 'about',
        ],
        [
            'name' => 'education',
            'path' => '/education',
            'view' => 'education',
        ],
        [
            'name' => 'skills',
            'path' => '/skills',
            'view' => 'skills',
        ],
        [
            'name' => 'contact',
            'path' => '/contact',
            'view' => 'contact',
        ],
    ],
];