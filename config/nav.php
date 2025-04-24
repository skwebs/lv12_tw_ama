<?php

return [
    [
        'id' => 1,
        'label' => 'Home',
        'route' => 'home',
        'path' => '/',
    ],
    ['id' => 5, 'route' => 'about', 'label' => 'About', 'path' => '/about'],
    ['id' => 6, 'route' => 'contact', 'label' => 'Contact', 'path' => '/contact'],
    [
        'id' => 2,
        'label' => 'Student',
        'route' => 'student',
        'path' => '#', // Placeholder, as it’s a dropdown
        'submenus' => [
            ['label' => 'Admission', 'route' => 'student.admission', 'path' => '/student/admission'],
            ['label' => 'Result', 'route' => 'student.result', 'path' => '/student/result'],
        ],
    ],
    [
        'id' => 3,
        'label' => 'Admin',
        'route' => 'student',
        'path' => '#', // Placeholder, as it’s a dropdown
        'submenus' => [
            ['label' => 'Super Admin', 'route' => 'student.admission', 'path' => '/student/admission'],
            ['label' => 'Admin', 'route' => 'student.result', 'path' => '/student/result'],
        ],
    ],
    // [
    //     'id' => 4,
    //     'label' => 'Dashboard',
    //     'route' => 'dashboard',
    //     'path' => '/dashboard',
    // ],
];
