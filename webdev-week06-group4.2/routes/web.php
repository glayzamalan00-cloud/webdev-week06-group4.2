<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $features = [
        ['title' => 'Student Records', 'desc' => 'Access enrollment, grades, and records in one platform.'],
        ['title' => 'Helpdesk', 'desc' => 'Send questions, concerns, and requests to the school, and track their status.'],
        ['title' => 'Campus Communication', 'desc' => 'Connect students, faculty, and staff through one portal.'],
    ];
    return view('home', ['features' => $features]);
});

Route::get('/about', function () {
    $members = ['Glayza D. Malan', 'Francheska T. Lanip'];
    return view('about', ['members' => $members]);
});

Route::get('/contact', function () {
    $contacts = [
        'Email' => 'cccportal@gmail.com',
        'Phone' => '(002) 607-93940',
    ];
    return view('contact', ['contacts' => $contacts]);
});