<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\BlogController;

use App\Http\Controllers\Backend\EventController;

use App\Http\Controllers\Backend\NewsletterController;
/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('partners', [HomeController::class, 'partner'])->name('partner');
Route::get('services', [HomeController::class, 'services'])->name('service');
Route::get('shop', [HomeController::class, 'shop'])->name('shop');
Route::get('blog', [BlogController::class, 'indexBlog'])->name('blog');
Route::get('blog/{slug}', [BlogController::class, 'showBlog'])->name('blog.view')->where('slug', '[\w\d\-\_]+');
Route::get('category', [BlogController::class, 'viewCategory'])->name('blog.category');
Route::get('category/{slug}', [BlogController::class, 'categoryBlog'])->name('category.view');


//newsletter email sending

/*
Route::get('/newsletter', function()
{
	$beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);
    $beautymail->send('emails.ark', [], function($message)
    {
        $message
			->from('stecongroup@example.com')
			->to('olayahya64@example.com', 'Olanda Kanmi')
			->subject('Welcome to stecongroup Newsletter!');
    });

});
*/


//comment
Route::post('comments/{post_id}', [BlogController::class, 'storeComment'])->name('comments.store');


//Route::get('blog/{slug}', [HomeController::class, 'blog'])->name('blog')->where('slug', '[\w\d\-\_]+');
//Route::('blog/{slug}', ['as'=>'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');


Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

//book appointment with a staff through the frontend application
Route::get('appointment', [EventController::class, 'createAppointment'])->name('appointment');
Route::post('appointment/send', [EventController::class, 'sendAppointment'])->name('appointment.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
