<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\HomeController;

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

Route::group(['prefix' => 'guest'], function()
{
    Route::get('/', [GuestController::class, 'index'])->name('guest.index');

    Route::get('/barang/list', [GuestController::class, 'listBarang'])->name('guest.barang.list');
    Route::get('/barang/list/{barang}', [GuestController::class, 'showBarang'])->name('guest.barang.detail');

    Route::get('/post/list', [GuestController::class, 'listPost'])->name('guest.post.list');
    Route::get('/post/list/{post}', [GuestController::class, 'showPost'])->name('guest.post.detail');
});

Route::group(['prefix' => 'admin'], function()
{
    Route::get('/', [SuperController::class, 'index'])->name('admin.index');

    Route::get('/member/list', [SuperController::class, 'listMember'])->name('admin.member.list');
    Route::get('/member/list/form', [SuperController::class, 'formMember'])->name('admin.member.form');
    Route::get('/member/list/{user}', [SuperController::class, 'showMember'])->name('admin.member.detail');
    Route::get('/member/list/delete/{user}', [SuperController::class, 'delMember'])->name('admin.member.delete');

    Route::get('/barang/list', [SuperController::class, 'listBarang'])->name('admin.barang.list');
    Route::get('/barang/list/form', [SuperController::class, 'formBarang'])->name('admin.barang.form');
    Route::post('/barang/list', [SuperController::class, 'addBarang'])->name('admin.barang.add');
    Route::get('/barang/list/{barang}', [SuperController::class, 'showBarang'])->name('admin.barang.detail');
    Route::get('/barang/list/{barang}/edit', [SuperController::class, 'formUpBarang'])->name('admin.barang.edit');
    Route::patch('/barang/list', [SuperController::class, 'upBarang'])->name('admin.barang.update');
    Route::get('/barang/list/delete/{barang}', [SuperController::class, 'delBarang'])->name('admin.barang.delete');

    Route::get('/post/list', [SuperController::class, 'listMember'])->name('admin.member.list');
    Route::get('/post/list/form', [SuperController::class, 'formMember'])->name('admin.member.form');
    Route::post('/post/list', [SuperController::class, 'addMember'])->name('admin.member.add');
    Route::get('/post/list/{post}', [SuperController::class, 'showMember'])->name('admin.member.detail');
    Route::get('/post/list/{post}/edit', [SuperController::class, 'formUpMember'])->name('admin.member.edit');
    Route::patch('/post/list', [SuperController::class, 'upMember'])->name('admin.member.update');
    Route::get('/post/list/delete/{post}', [SuperController::class, 'delMember'])->name('admin.member.delete');
});

Route::group(['prefix' => 'member', 'middleware' => 'auth'], function()
{
    Route::get('/', [MemberController::class, 'index'])->name('member.index');

    Route::get('/barang/list', [MemberController::class, 'listBarang'])->name('member.barang.list');
    Route::get('/barang/list/{barang}', [MemberController::class, 'showBarang'])->name('member.barang.detail');

    Route::get('/post/list', [MemberController::class, 'listPost'])->name('member.post.list');
    Route::get('/post/list/{post}', [MemberController::class, 'showPost'])->name('member.post.detail');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
