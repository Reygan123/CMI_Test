<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DiabetesRiskController;
use App\Http\Controllers\HealthCalculatorController;
use App\Models\Article;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    $latestArticles = Article::latest()->take(5)->get(); 
    return view('dashboard', compact('latestArticles'));
})->middleware(['auth'])->name('dashboard');

Route::get('/layanan-diabetes', function () {
    $latestArticles = Article::whereHas('category', function ($query) {
        $query->where('name', 'Diabetes');
    })->latest()->take(4)->get();

    return view('service.diabetes.index', compact('latestArticles'));
})->name('layanan.diabetes');

Route::post('/calculate-risk', [DiabetesRiskController::class, 'calculateRisk'])->name('calculate-risk');

Route::get('articles', [ArticleController::class, 'indexUser'])->name('articles.indexUser');
Route::get('articles/{slug}', [ArticleController::class, 'showUser'])->name('articles.showUser');

Route::get('/health-calculator', [HealthCalculatorController::class, 'index'])->name('health.calculator');
Route::post('/health-calculator/bmi', [HealthCalculatorController::class, 'calculateBmi'])->name('health.calculator.bmi');
Route::post('/health-calculator/blood-sugar', [HealthCalculatorController::class, 'calculateBloodSugar'])->name('health.calculator.blood_sugar');

Route::middleware(['auth', 'checkRole'])->group(function () {
    Route::get('/admin/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/admin/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/admin/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/admin/articles/{slug}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::get('/admin/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');
    Route::put('/admin/articles/{slug}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/admin/articles/{slug}', [ArticleController::class, 'destroy'])->name('articles.destroy');
});

Route::middleware(['auth', 'checkRole'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', function (Request $request) {
        Auth::logout();
        return redirect('/');
    })->name('logout');
});

require __DIR__ . '/auth.php';
