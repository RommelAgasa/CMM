<?php

use App\Http\Controllers\FilterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FilterController::class, 'index'])->name('filter.index');


/** Answer to Question # 2 */
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
/**Why???
 * The auth middleware ensures that only users who are logged in 
 * can access the /dashboard route. It protects sensitive or 
 * personalized content by redirecting unauthenticated users 
 * to the login page. This is essential for securing user-specific 
 * areas like dashboards.
 */