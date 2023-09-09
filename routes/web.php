<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('undangan.index');
});

Route::prefix('undangan')->name('undangan.')->group(function(){

    Route::get('/', [InvitationController::class, 'index'])->name('index');
    Route::post('/', [InvitationController::class, 'check_code'])->name('check-code');
    Route::get('/{code}', [InvitationController::class, 'tamu'])->name('tamu');

});

Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware('guest')->group(function() {

        Route::get('/',         [LoginController::class, 'index'])->name('index');
        Route::post('/login',   [LoginController::class, 'login'])->name('login');

    });

    Route::middleware('auth')->group(function() {

        Route::post('/logout',                  [LoginController::class, 'logout'       ])->name('logout');
        
        Route::get('/daftar-tamu',              [AdminController::class, 'daftar_tamu'  ])->name('daftar-tamu');
        Route::post('/daftar-tamu/add',         [AdminController::class, 'add_tamu'     ])->name('add-tamu');
        Route::post('/daftar-tamu/delete/{id}', [AdminController::class, 'delete_tamu'  ])->name('delete-tamu');
        Route::post('/daftar-tamu/sent/{id}',   [AdminController::class, 'sent_tamu'    ])->name('sent-tamu');
        
        Route::get('/rsvp',                     [AdminController::class, 'rsvp'         ])->name('rsvp');
        
        Route::get('/wishes',                   [AdminController::class, 'wishes'       ])->name('wishes');

    });

});