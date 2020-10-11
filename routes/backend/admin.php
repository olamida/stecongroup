<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\NewsletterController;
use App\Http\Controllers\Backend\CampaignController;
use App\Http\Controllers\Backend\CustomerController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

/*
Route::get('post/category', [PostCategoryController::class, 'index'])->name('post.manage.category');
Route::get('post/category/create', [PostCategoryController::class, 'create'])->name('post.manage.category.create');
Route::post('post/category/', [PostCategoryController::class, 'index'])->name('post.manage.category.store');
Route::get('post/category/edit/{id}', [PostCategoryController::class, 'edit'])->name('post.manage.category.edit');
Route::patch('post/category', [PostCategoryController::class, 'index'])->name('post.manage.category.update');
Route::delete('post/category', [PostCategoryController::class, 'destroy'])->name('post.manage.category.delete');
*/

//office: post, event, appointment, project, task, newsletter
//hr: position, employee, attendance
//customers: order, product, category, promotion, discount, delivery

//post category
Route::resource('category', 'CategoryController');

Route::resource('post', 'PostController');

Route::resource('tag', 'TagController');

Route::resource('event', 'EventController');

Route::resource('appointment', 'CategoryController');

Route::resource('service', 'ServiceController');

Route::resource('department', 'DepartmentController');

Route::resource('employee', 'EmployeeController');


Route::resource('position', 'CategoryController');

Route::resource('attendance', 'CategoryController');

Route::resource('newsletter', 'NewsletterController');

Route::get('newsletter/subscribe/{id}', [NewsletterController::class, 'subscribe'])
	->name('newsletter.subscribe');

Route::resource('campaign', 'campaignController');
Route::get('sendCampaign/{id}', [CampaignController::class, 'sendCampaign'])->name('campaign.send');

Route::resource('project,', 'CategoryController');

Route::resource('task', 'CategoryController');

//customers: order, product, category, promotion, discount, delivery
Route::resource('customer', 'CustomerController');
Route::resource('order', 'CategoryController');
Route::resource('product', 'CategoryController');
Route::resource('category', 'CategoryController');
Route::resource('promotion', 'CategoryController');
Route::resource('discount', 'CategoryController');
Route::resource('delivery', 'CategoryController');
