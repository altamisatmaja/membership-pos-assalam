<?php

use App\Http\Controllers\Admin\ActivateAdminController;
use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\MemberAdminController;
use App\Http\Controllers\Pelanggan\AcocuntPelangganController;
use App\Http\Controllers\Pelanggan\AuthPelangganController;
use App\Http\Controllers\Pelanggan\DashboardPelangganController;
use App\Http\Controllers\Pelanggan\MemberPelangganController;
use App\Http\Controllers\Pelanggan\RegisterPelangganController;
use App\Http\Controllers\Web\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index'])->name('pages.home');
Route::get('belanja', [PagesController::class, 'shop'])->name('pages.shop');
Route::get('membership', [PagesController::class, 'membership'])->name('pages.membership');
Route::get('pre-membership', [PagesController::class, 'pre_membership'])->name('pages.pre-membership');
Route::get('tentang', [PagesController::class, 'about'])->name('pages.about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('admin/login', [AuthAdminController::class, 'index'])->name('admin.login');
Route::post('admin/login', [AuthAdminController::class, 'login'])->name('admin.login.store');

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthPelangganController::class, 'index'])->name('customer.login');
    Route::post('login/store', [AuthPelangganController::class, 'login'])->name('customer.login.store');

    Route::get('register', [RegisterPelangganController::class, 'index'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});


Route::middleware(['auth', 'role:Pelanggan'])->group(function () {
    Route::get('pelanggan/personal', [DashboardPelangganController::class, 'index'])->name('customer.dashboard');
    Route::get('pelanggan/personal/update', [DashboardPelangganController::class, 'update'])->name('customer.dashboard.update');
    Route::put('pelanggan/personal/edit', [DashboardPelangganController::class, 'edit'])->name('customer.dashboard.edit');
    Route::get('pelanggan/personal/barcode', [DashboardPelangganController::class, 'barcode'])->name('customer.dashboard.barcode');

    Route::post('pelanggan/member/store', [MemberPelangganController::class, 'store'])->name('customer.member.store');

    Route::get('pelanggan/logout', [AuthPelangganController::class,'logout'])->name('pelanggan.logout');
});

Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');

    Route::get('admin/dashboard/member', [MemberAdminController::class, 'index'])->name('admin.dashboard.member');

    Route::get('admin/dashboard/activate', [ActivateAdminController::class, 'index'])->name('admin.dashboard.activate');
    Route::get('admin/dashboard/activate/{nomor_pas}', [ActivateAdminController::class, 'show'])->name('admin.dashboard.activate.show');
    Route::put('admin/dashboard/activate/update/{nomor_pas}', [ActivateAdminController::class, 'update'])->name('admin.dashboard.activate.update');

    Route::get('admin/logout', [AuthAdminController::class,'logout'])->name('admin.logout');
});

