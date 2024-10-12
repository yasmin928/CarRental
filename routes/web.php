<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


                               //Admi Panel
//USER                        
Route::get('/admin/users',[UserController::class,'index'])->name('/admin/users');

Route::get('/admin/addusers',[UserController::class,'create'])->name('addUser');
Route::post('/admin/userstore',[UserController::class,'store'])->name('userStore');

Route::get('/admin/users/edit/{id}',[UserController::class,'edit']);
Route::put('/admin/users/update/{id}',[UserController::class,'update'])->name('userUpdate');

Route::get('/admin/users/delete/{id}',[UserController::class,'destroy']);


//CATEGORY

Route::get('/admin/category',[CategoryController::class,'index'])->name('/admin/category');

Route::get('/admin/addcategory',[CategoryController::class,'create'])->name('addcategory');
Route::post('/admin/categorystore',[CategoryController::class,'store'])->name('categoryStore');

Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit']);
Route::put('/admin/category/update/{id}',[CategoryController::class,'update'])->name('categoryUpdate');

Route::get('/admin/category/delete/{id}',[CategoryController::class,'destroy']);


//CAR

Route::get('/admin/car',[CarController::class,'index'])->name('/admin/car');

Route::get('/admin/addcar',[CarController::class,'create'])->name('addcar');
Route::post('/admin/carstore',[CarController::class,'store'])->name('carStore');

Route::get('/admin/car/edit/{id}',[CarController::class,'edit']);
Route::put('/admin/car/update/{id}',[CarController::class,'update'])->name('carUpdate');

Route::get('/admin/car/delete/{id}',[CarController::class,'destroy']);

Route::get('/cars/{id}', [CarController::class, 'show'])->name('car.show');


//TESTIMONIAL
Route::get('/admin/testimonial',[TestimonialController::class,'index'])->name('/admin/testimonial');

Route::get('/admin/addtestimonial',[TestimonialController::class,'create'])->name('addtestimonial');
Route::post('/admin/testimonialstore',[TestimonialController::class,'store'])->name('testimonialStore');

Route::get('/admin/testimonial/edit/{id}',[TestimonialController::class,'edit']);
Route::put('/admin/testimonial/update/{id}',[TestimonialController::class,'update'])->name('testimonialUpdate');

Route::get('/admin/testimonial/delete/{id}',[TestimonialController::class,'destroy']);


//MESSAGES
Route::get('/admin/message', [MessageController::class, 'index'])->name('admin.message');
Route::get('/admin/message/{id}', [MessageController::class, 'show'])->name('admin.messages.show');
Route::delete('/admin/message/delete/{id}', [MessageController::class, 'destroy'])->name('admin.messages.destroy');


//LOGIN
Route::get('/admin/login', [UserController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [UserController::class, 'login'])->name('admin.login.submit');

// Admin routes that need the isAdmin middleware
Route::middleware(['isAdmin'])->group(function () {
    Route::post('/admin/users', [UserController::class, 'login'])->name('admin.users');
});

//REGESTIR
// Show registration form
Route::get('/admin/register', [UserController::class, 'showRegistrationForm'])->name('admin.register');

// Handle registration form submission
Route::post('/admin/register', [UserController::class, 'register'])->name('admin.register.submit');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

//AUTH
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');



                                           //Main website

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
// Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');


Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/home/listing', [PageController::class, 'index'])->name('home.listing');
Route::get('/listing', [CarController::class, 'latestCars'])->name('listing');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');






// Route::view('/admin','admin.login');






