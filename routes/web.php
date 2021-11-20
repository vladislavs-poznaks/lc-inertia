<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
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

Route::get('login', [LoginController::class, 'create'])
    ->name('login');

Route::post('login', [LoginController::class, 'store']);

Route::post('logout', [LoginController::class, 'destroy']);

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return inertia('Home');
    });

    Route::get('/users', function () {
        return inertia('Users/Index', [
            'users' => User::query()
                ->when(request('search'), fn(Builder $query, $search) => $query->where('name', 'like', "%{$search}%"))
                ->paginate(10)
                ->withQueryString()
                ->through(fn($user) => [
                    'id' => $user->id,
                    'name' => $user->name,
                ]),
            'filters' => request()->only('search')
        ]);
    });

    Route::get('/users/create', function () {
        return inertia('Users/Create');
    });

    Route::post('/users', function (Request $request) {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($attributes);

        return redirect('/users');
    });

    Route::get('/settings', function () {
        return inertia('Settings');
    });
});

