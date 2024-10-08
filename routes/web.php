<?php

//php artisan make:middleware EnsureTokenIsValid --creating middleware--

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\VerifyAdmin;
use App\Http\Middleware\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Assigning a Middleware on a Route (Route Middleware)
// Route::get('/', function () {
//     return view('welcome');
// })->middleware(EnsureTokenIsValid::class);

//Assigning a Middleware on a Route (Global Middleware)
// Route::get('/', function () {
//     return view('welcome');
// });
//--Check bootstrap/app.php

//Middleware Aliases
// Route::get('/', function () {
//     return view('welcome');
// })->middleware('role', 'validity');
//role = VerifyRole::class

//Middleware Aliases (Multiple)
// Route::get('/', function () {
//     return view('welcome');
// })->middleware('role');
//role = VerifyRole::class

//Middleware Parameters
// Route::get('/', function () {
//         return view('welcome');
//     })->middleware('role:user');

//Assigning multiple Middleware on a single Route
// Route::get('/about', function () {
//     return view('about');
// })-> name('about')->middleware([VerifyRole::class, EnsureTokenIsValid::class]);



        // Route::get('/features', function () {
        //     return view('features');
        // })-> name('features');

        // Route::get('/versions', function () {
        //     return view('versions');
        // })-> name('versions');


        // Route::get('/history', function () {
        //     return view('history');
        // })-> name('history');


        // Route::get('/about', function () {
        //     return view('about');
        // })-> name('about');

        Route::get('/', [UserController::class, 'welcome']);

        Route::get('/guests/blog', [PostController::class, 'blog'])->name('blog');

        Route::get('/guests/features', [UserController::class, 'features'])->name('features');

        Route::get('/guests/versions', [UserController::class, 'versions'])->name('versions');

        Route::get('/guests/history', [UserController::class, 'history'])->name('history');

        Route::get('/guests/about', [UserController::class, 'about'])->name('about');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
        Route::middleware('hasRole:Administrator')->group(
            function(){
                // Route::get('/dashboard', function () {
                //     return view('dashboard');
                // })->name('dashboard');

                //Post Controller
                Route::get('/posts/allPosts', [PostController::class, "allPosts"], function () {
                })->name('allPosts');
                
                Route::get('/admins/user-list', [AdminController::class, "userList"], function () {
                })->name('userList');
            }
        );
                Route::get('/dashboard', [AdminController::class, "dashboard"], function () {
                })->name('dashboard');

                // Route::post('/storePost', [PostController::class, "storePost"], function () {
                // })->name('storePost');

                // Route::get('/posts/modify-post', [PostController::class, "modifyPostView"], function () {
                // })->name('modifyPostView');
                // Route::post('/editView', [PostController::class, "updatePost"], function () {
                // })->name('editPost');
                
                Route::get('/posts/showPost/{id}', [PostController::class, 'showPost'])->name('showPost');

                Route::get('/posts/create-post', [PostController::class, "createPostView"], function () {
                })->name('createPostView');
        
                Route::post('/posts/storePost', [PostController::class, 'storePost'], function () {})->name('storePost');
        
                Route::get('/posts/modifyPostView/{id}', [PostController::class, 'modifyPostView'])->name('modifyPostView');
        
                Route::put('/posts/updatePost/{id}', [PostController::class, 'updatePost'])->name('updatePost');

                Route::post('/posts/destoryPost/{id}', [PostController::class, 'destroyPost'], function (){})->name('destroyPost');
});




// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//     // Route::get('/create-content', function () {
//     //     return view('create-content');
//     // })->name('create');
//     Route::get('/create-content', [AdminController::class, "create"], function () {
//         })->name('create');

//     // Route::get('/modify-content', function () {
//     //     return view('modify-content');
//     // })->name('modify');
//     Route::get('/modify-content', [AdminController::class, "modify"], function () {
//     })->name('modify');
// });

// Route::get('/user',[UserController::class, 'index']);
// Route::get('/user-create',[UserController::class, 'create']);