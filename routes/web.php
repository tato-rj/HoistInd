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

Route::get('test', function() {
	dd(\Storage::disk('downloads')->path(config('app.brochure')));
});

Route::get('', function() {
	return view('home.index');
})->name('home');

Route::get('services/control-system-conversion', function() {
	return view('control.index');
})->name('control');

Route::get('services/purchasing', function() {
	return view('purchasing.index');
})->name('purchasing');

Route::get('industries/gc', function() {
	return view('gc.index');
})->name('gc');

Route::get('industries/hc', function() {
	return view('hc.index');
})->name('hc');

Route::get('about', function() {
	return view('about.index');
})->name('about');

Route::get('contact', function() {
	return view('contact.index');
})->name('contact');

Route::get('contact-form', function() {
	return view('components.forms.contact')->render();
});

Route::post('consultation', 'MailController@consultation')->name('consultation');

Route::post('contact', 'MailController@contact')->name('contact');

Route::get('brochure', 'DownloadsController@brochure')->name('brochure');

Route::post('brochure', 'MailController@brochure')->name('brochure');
