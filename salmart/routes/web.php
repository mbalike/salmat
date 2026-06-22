<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', fn() => view('index'));

// Main pages
Route::get('/about', fn() => view('about'));
Route::get('/contact', fn() => view('contact'));
Route::get('/why', fn() => view('why'));
Route::get('/how-we-work', fn() => view('how-we-work'));
Route::get('/industries', fn() => view('industries'));
Route::get('/standards', fn() => view('standards'));
Route::get('/storytelling', fn() => view('storytelling'));
Route::get('/city-visitors-guide', fn() => view('city-visitors-guide'));
Route::get('/bluediplomats', fn() => view('bluediplomats'));

// Services
Route::get('/services', fn() => view('services'));
Route::get('/service-event-management-production', fn() => view('service-event-management-production'));
Route::get('/service-mice-delivery', fn() => view('service-mice-delivery'));
Route::get('/service-cruise-line-services', fn() => view('service-cruise-line-services'));
Route::get('/service-maritime-services', fn() => view('service-maritime-services'));
Route::get('/service-sports-tourism-services', fn() => view('service-sports-tourism-services'));
Route::get('/service-tours-experiences', fn() => view('service-tours-experiences'));
Route::get('/service-destination-management-hospitality', fn() => view('service-destination-management-hospitality'));
Route::get('/service-media-management-strategic-storytelling', fn() => view('service-media-management-strategic-storytelling'));
Route::get('/service-protocol-diplomatic', fn() => view('service-protocol-diplomatic'));

// Departments
Route::get('/departments', fn() => view('departments'));
Route::get('/department-business-development-partnerships', fn() => view('department-business-development-partnerships'));
Route::get('/department-tours-experiences', fn() => view('department-tours-experiences'));
Route::get('/department-destination-management-hospitality', fn() => view('department-destination-management-hospitality'));
Route::get('/department-event-conference-management', fn() => view('department-event-conference-management'));
Route::get('/department-finance-administration', fn() => view('department-finance-administration'));
Route::get('/department-media-communications', fn() => view('department-media-communications'));
Route::get('/department-training-capacity-building', fn() => view('department-training-capacity-building'));
Route::get('/department-protocol-diplomatic-services', fn() => view('department-protocol-diplomatic-services'));
Route::get('/department-strategic-affairs-scientific-engagement', fn() => view('department-strategic-affairs-scientific-engagement'));

// Portfolio
Route::get('/portfolio', fn() => view('portfolio'));
Route::get('/portfolio-detail-alc-2024-fft', fn() => view('portfolio-detail-alc-2024-fft'));
Route::get('/portfolio-detail-far4vibe-2024', fn() => view('portfolio-detail-far4vibe-2024'));
Route::get('/portfolio-detail-ijuka-omuka-2024', fn() => view('portfolio-detail-ijuka-omuka-2024'));
Route::get('/portfolio-detail-kiost-delegation', fn() => view('portfolio-detail-kiost-delegation'));
Route::get('/portfolio-detail-marcosio-2025', fn() => view('portfolio-detail-marcosio-2025'));
Route::get('/portfolio-detail-nane-nane-summary', fn() => view('portfolio-detail-nane-nane-summary'));
Route::get('/portfolio-detail-oryx-energy-iftar-gala-2026', fn() => view('portfolio-detail-oryx-energy-iftar-gala-2026'));
Route::get('/portfolio-detail-row-2025', fn() => view('portfolio-detail-row-2025'));
