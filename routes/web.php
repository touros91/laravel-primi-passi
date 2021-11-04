<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        "mainTitle" => "Laravel",
        "title" => "The PHP Framework For Web Artisans",
        "description" => "Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things."
    ];
    return view('home', $data);
});

Route::get('/aboutUs', function () {
    $data = [
        "title" => "About Us",
        "history" => "Laravel was developed and created by Taylor Otwell as an attempt to give an excellent substitute for the older PHP framework named CodeIgniter. And this was because CodeIgniter did not offer such great features as support for built-in customer authentication and proper user authorization. In June 2011 Laravel released its first beta version, and later in the same month, Laravel 1 got released. Other than authentication, Laravel also has built-in support for localization, views, dealing with sessions, routing the request to the specific controller, and other amazing features."
    ];
    return view('aboutUs', $data);
});

Route::get('/contacts', function () {
    $data = [
        "title" => "Contacts",
        "discover" => "Discover our office locations and different ways to contact us so that we can provide you with the support you need.",
        "contacts" => [
            "address" => "Address: 1600 Amphitheatre Parkway Mountain View, CA 94043",
            "email" => "Email: community@laravel.com",
            "phone" => "Phone: 650-253-1234",
            "fax" => "Fax: 650-253-4321"
        ]
    ];
    return view('contacts', $data);
});
