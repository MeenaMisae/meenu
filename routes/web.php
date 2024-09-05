<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Recipes\Index as RecipesIndex;
use App\Livewire\Admin\Sales\Create;
use App\Livewire\Admin\Sales\Index as SalesIndex;

Route::get('/', function () {
    return redirect('dashboard');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('painel', function () {
        return view('dashboard');
    })->name('admin.dashboard.index');
    Route::prefix('receitas')->group(function () {
        Route::get('', RecipesIndex::class)->name('admin.recipes.index');
    });
    Route::prefix('vendas')->group(function () {
        Route::get('', SalesIndex::class)->name('admin.sales.index');
        Route::get('nova-venda', Create::class)->name('admin.sales.create');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
