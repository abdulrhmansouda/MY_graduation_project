<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Models\Post;
use App\Models\User;
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

Route::get('/test', [TestController::class, 'index']);

// Route::get('/sidebar', fn () => view('sidebar'));

// Route::get('/', function () {
//     return view('welcome');
// });
 
Route::get('/', function () {
    return view('welcoming.welcome');
})->name('welcome');

// Route::get('/llogin', function () {
//     return view('welcoming.user-login');
// })->name('user-login');

Route::get('/user-register', function () {
    return view('welcoming.user-register');
})->name('user-register');




Route::group([
    'middleware' => ['auth', 'isBlocked'],
], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/home', function () {
        return view('home', [
            'posts' => Post::latest()->get(),
        ]);
    })->name('home');






    /////////////////post//////////////////
    Route::name('post.')->prefix('/posts')->group(function () {

        // Route::get('/create', function () {
        //     return view('post.create');
        // })->name('create');

        Route::resource('/',PostController::class);

        Route::get('/', function () {
            return view('post.posts', [
                'posts' => Post::all(),
                'title' => 'All posts'
            ]);
        })->name('posts');

        Route::get('/{post:slug}', function (Post $post) {
            return view('post.post')->with('post', $post);
        })->name('show');

        Route::get('/user/{user:username}', function (User $user) {
            return view('post.posts')
                ->with('posts', $user->posts)
                ->with('title', $user->name);
        })->name('user');

    });


    /////////////////admin//////////////////
    Route::name('admin.')->prefix('/admin')->middleware(['isAdmin'])->group(function () {
        Route::get('/companies', [AdminController::class, 'companies'])->name('companies');
        Route::get('/companies/{company}', [AdminController::class, 'company_show'])->name('company');
        Route::put('/users/block/{user}', [AdminController::class, 'user_block'])->name('users.block');
        Route::get('/', function () {
            return view('admin.controlpanel');
        });
    });

    /////////////////company//////////////////
    Route::group([
        'prefix' => '/company',
        'middleware' => ['isCompany'],
    ], function () {
        Route::get('/', function () {
            dd('company');
        });
    });

    /////////////////employee//////////////////
    Route::group([
        'prefix' => '/employee',
        'middleware' => ['isEmployee'],
    ], function () {
        Route::get('/', function () {
            dd('employee');
        });
    });
});

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
