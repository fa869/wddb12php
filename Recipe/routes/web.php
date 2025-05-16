 
 <?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RecipeViewController;
use App\Http\Controllers\SendMessageController;

Auth::routes();


//route define for viewRecipe  controller
Route::get('Recipe/{id}',[RecipeViewController::class,'show']);
//Route define for Send Message

Route::post('/submit',[SendMessageController::class,'SendMessage'])->name('contact.submit');

// Finder Page
Route::get('/', function () {
    return view('Recipe');
});
Route::get('/Recipe', function () {
    return view('Recipe');
})->name('Recipe');

// About Page
Route::get('/contact-us', function () {
    return view('contact-us');
});

// Admin Panel
Route::get('/admin', function () {
    return view('layouts.master');
});

// Recipes Routes
Route::get('/Recipes', function () {
    return view('Recipes.index');
});
Route::get('/Recipe/create', function () {
    return view('Recipe.create');
});

// Home Route
Route::get('/home', function () {
    return view('home.index');
});

// Categories Routes
Route::get('/category', function () {
    return view('category.index');
});
Route::get('/category/create', function () {
    return view('category.create');
});

// Slider Routes
Route::get('/slider', function () {
    return view('slider.index');
});
Route::get('/slider/create', function () {
    return view('slider.create');
});

// Logout Route (Fixed)
Route::get('/logout', function () {
   
});

// Details Page
Route::get('/details', function () {
    return view('details');
});

//listing page

Route::get('/listing', function () {
    return view('list');
});
Route::get('/home', function () {
    return view('Recipe');
});

//breakfast
Route::get('/breakfast',function(){
    return View('breakfast');
});
//Lunch
Route::get('/lunch',function(){
    return View('lunch');
});

//Dinner
Route::get('/dinner',function(){
    return View('dinner');
});
//Snacks
Route::get('/snacks',function(){
    return View('snacks');
});
//Desserts
Route::get('/desserts',function(){
    return View('desserts');
});
//salads
Route::get('/salads',function(){
    return View('salads');
});
//soups
Route::get('/soups',function(){
    return View('soups');
});

//Upload Recipe route
Route::get('/upload',function(){
    return View('uploadrecipe');
});
