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

// Sitemap
Route::get('/sitemap.xml', function () {
    $urls = [
        ['loc' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => '/about', 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['loc' => '/services', 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['loc' => '/portfolio', 'priority' => '0.8', 'changefreq' => 'weekly'],
        ['loc' => '/contact', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => '/why', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => '/how-we-work', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => '/departments', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => '/industries', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => '/standards', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => '/storytelling', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => '/city-visitors-guide', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => '/bluediplomats', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => '/service-event-management-production', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => '/service-mice-delivery', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => '/service-cruise-line-services', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => '/service-maritime-services', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => '/service-sports-tourism-services', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => '/service-tours-experiences', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => '/service-destination-management-hospitality', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => '/service-media-management-strategic-storytelling', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => '/service-protocol-diplomatic', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => '/department-business-development-partnerships', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => '/department-tours-experiences', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => '/department-destination-management-hospitality', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => '/department-event-conference-management', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => '/department-finance-administration', 'priority' => '0.5', 'changefreq' => 'monthly'],
        ['loc' => '/department-media-communications', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => '/department-training-capacity-building', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => '/department-protocol-diplomatic-services', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => '/department-strategic-affairs-scientific-engagement', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ['loc' => '/portfolio-detail-alc-2024-fft', 'priority' => '0.6', 'changefreq' => 'yearly'],
        ['loc' => '/portfolio-detail-far4vibe-2024', 'priority' => '0.6', 'changefreq' => 'yearly'],
        ['loc' => '/portfolio-detail-ijuka-omuka-2024', 'priority' => '0.6', 'changefreq' => 'yearly'],
        ['loc' => '/portfolio-detail-kiost-delegation', 'priority' => '0.6', 'changefreq' => 'yearly'],
        ['loc' => '/portfolio-detail-marcosio-2025', 'priority' => '0.6', 'changefreq' => 'yearly'],
        ['loc' => '/portfolio-detail-nane-nane-summary', 'priority' => '0.6', 'changefreq' => 'yearly'],
        ['loc' => '/portfolio-detail-oryx-energy-iftar-gala-2026', 'priority' => '0.6', 'changefreq' => 'yearly'],
        ['loc' => '/portfolio-detail-row-2025', 'priority' => '0.6', 'changefreq' => 'yearly'],
    ];
    return response()->view('sitemap', ['urls' => $urls])
        ->header('Content-Type', 'application/xml');
});

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
