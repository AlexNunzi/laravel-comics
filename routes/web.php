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

    $navLinks = config('db.nav_links');
    $footerLinks = config('db.foot_links');
    $footerBottomLinks = config('db.foot_bottom_links');
    $comics = config('db.comics');
    $navigationLinks = config('db.navigationLinks');

    $data = [
        'navLinks' => $navLinks, 
        'footerLinks' => $footerLinks, 
        'footerBottomLinks' => $footerBottomLinks, 
        'comics' => $comics, 
        'navigationLinks' => $navigationLinks
    ];

    return view('home', $data);

});
