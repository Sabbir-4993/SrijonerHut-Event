<?php

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('index');

Route::group(['prefix'=>'festival', 'as'=>'festival.'], function (){
    Route::get('/schedule', [PageController::class,'schedule'])->name('schedule');
    Route::get('/tickets', [PageController::class, 'tickets'])->name('tickets');
    Route::get('/sponsors', [PageController::class, 'sponsors'])->name('sponsors');
    Route::get('/become-a-member', [PageController::class, 'member'])->name('membership');
    Route::get('/2016/details', [PageController::class, 'fest_2016'])->name('fest_2016');
    Route::get('/2017/details', [PageController::class, 'fest_2017'])->name('fest_2017');
    Route::get('/2018/details', [PageController::class, 'fest_2018'])->name('fest_2018');
    Route::get('/2019/details', [PageController::class, 'fest_2019'])->name('fest_2019');
    Route::get('/2020/details', [PageController::class, 'fest_2020'])->name('fest_2020');
    Route::get('/2022/details', [PageController::class, 'fest_2022'])->name('fest_2022');
    Route::get('/2023/details', [PageController::class, 'fest_2023'])->name('fest_2023');
    Route::get('/2024/details', [PageController::class, 'fest_2024'])->name('fest_2024');
    Route::get('/2025/details', [PageController::class, 'fest_2025'])->name('fest_2025');
});

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/Nakshikantha', [PageController::class, 'event'])->name('event');
Route::group(['prefix'=>'news', 'as'=>'news.'], function (){
    Route::get('/media', [PageController::class, 'media'])->name('media');
    Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
    Route::get('/video', [PageController::class, 'video'])->name('video');
});



Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// routes/web.php

Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');

