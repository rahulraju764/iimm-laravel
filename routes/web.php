<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('pages.index');
})->name('home');

// About
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Contact
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Courses
Route::get('/courses', function () {
    return view('pages.course');
})->name('course');

Route::get('/course-details', function () {
    return view('pages.course-details');
})->name('course-details');

Route::get('/logistics-course', function () {
    return view('pages.logistics-course');
})->name('logistics-course');

Route::get('/warehouse-course', function () {
    return view('pages.warehouse-course');
})->name('warehouse-course');

Route::get('/artificial', function () {
    return view('pages.artificial');
})->name('artificial');

Route::get('/sap', function () {
    return view('pages.sap');
})->name('sap');

Route::get('/pgmm', function () {
    return view('pages.pgmm');
})->name('pgmm');

Route::get('/pgdl', function () {
    return view('pages.pgdl');
})->name('pgdl');

Route::get('/long-course', function () {
    return view('pages.long-course');
})->name('long-course');

Route::get('/short-course', function () {
    return view('pages.short-course');
})->name('short-course');

// Blog
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/blog-details', function () {
    return view('pages.blog-details');
})->name('blog-details');

Route::get('/logistic-management-blog', function () {
    return view('pages.logistic-management-blog');
})->name('logistic-management-blog');

Route::get('/warehouse-management-blog', function () {
    return view('pages.warehouse-management-blog');
})->name('warehouse-management-blog');

Route::get('/materials-management', function () {
    return view('pages.materials-management');
})->name('materials-management');

// Event
Route::get('/event', function () {
    return view('pages.event');
})->name('event');

// Gallery
Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

// News
Route::get('/news', function () {
    return view('pages.news');
})->name('news');

// Career
Route::get('/career', function () {
    return view('pages.career');
})->name('career');

// Testimonials
Route::get('/testimonials', function () {
    return view('pages.testimonials');
})->name('testimonials');

// Members
Route::get('/members', function () {
    return view('pages.members');
})->name('members');

// Past Chairman Says
Route::get('/past-chairman-says', function () {
    return view('pages.past-chairman-says');
})->name('past-chairman-says');

// Disclaimer
Route::get('/disclaimer', function () {
    return view('pages.disclaimer');
})->name('disclaimer');

// Programmes
Route::get('/programmes', function () {
    return view('pages.programmes');
})->name('programmes');

// Forms
Route::get('/enquiry-form', function () {
    return view('pages.enquiry-form');
})->name('enquiry-form');

Route::get('/application-form', function () {
    return view('pages.application-form');
})->name('application-form');

Route::get('/life-time-form', function () {
    return view('pages.life-time-form');
})->name('life-time-form');
