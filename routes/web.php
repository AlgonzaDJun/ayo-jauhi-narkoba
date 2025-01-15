<?php

use App\Http\Controllers\AccurateSelfAssesment;
use App\Http\Controllers\AccurateSelfAssesmentGuru;
use App\Models\page;
use App\Models\User;
use App\Models\admin;
use App\Models\Category;
use App\Models\rumahsakit;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\pageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\gejalaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\konsultasiController;
use App\Http\Controllers\rumahsakitController;
use App\Http\Controllers\pagePenyebabController;
use App\Http\Controllers\artikelDokterController;
use App\Http\Controllers\AyoJauhiNarkoba;
use App\Http\Controllers\AyoJauhiNarkobaGuru;
use App\Http\Controllers\AyoMengenaliAku;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\EmotionalAwareness;
use App\Http\Controllers\EmotionalAwarenessGuru;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurnalEmosi;
use App\Http\Controllers\JurnalMindfulness;
use App\Http\Controllers\SelfConfidence;
use App\Http\Controllers\SelfConfidentGuru;
use App\Models\Post; //tambahkan/ import model post yang akan digunakan

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
    return view('home');
});

// Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function () {
    return view('user.layout.layout');
});

Route::get('/apa-itu-tbc', function () {
    return view('apa-itu-tbc', [
        'pages' => page::all()
    ]);
})->middleware('verified');

Route::get('/rs', function () {
    return view('rumah-sakit', [
        'rumahsakits' => rumahsakit::get()
    ]);
});

Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::put('/profile', function () {
    $user_id = auth()->user()->id;

    // if password is empty
    if (request('password') == '') {
        User::find($user_id)->update([
            'name' => request('name'),
            'email' => request('email'),
        ]);

        return redirect('/profile');
    } else {
        User::find($user_id)->update([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        return redirect('/profile');
    }
})->name('profile.update');

Route::get('/artikel', [PostController::class, 'index']);


Route::get('post/{post:slug}', [PostController::class, 'show']);


Route::get('categories/{category:slug}', function (Category $category) {
    return view('artikel', [
        'title' => $category->name,
        'posts' => $category->posts->load('category'),
        'category' => $category->name,


    ]);
});

// checkout
Route::post('/checkout', [OrderController::class, 'checkout']);


// admin 
// Route::get('/admin-login', [AdminLoginController::class, 'index']);
// Route::post('/admin-login', [AdminLoginController::class, 'authenticate']);


Route::get('/admin-dashboard', function () {
    return view('admin.dashboard', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/admin-login', function () {
    return view('admin.login', []);
});



// Route::get('/admin-artikel', function () {
//     return view('admin.artikel');
// });


Route::get('/admin-user', function () {
    return view('admin.user', [
        'title' => 'User',
        'users' => User::all()


    ]);
});


Route::get('/auth/redirect', [LoginController::class, 'redirectToProvider']);
Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback']);


Route::get('/admin-artikel/CheckSlug', [DashboardPostController::class, 'CheckSlug']);

// Route::resource('admin-artikel', DashboardPostController::class);
Route::resource('admin-artikel', DashboardPostController::class)->parameters([
    'admin-artikel' => 'post',
]);

Route::get('page', [pageController::class, 'index'])->name('page.index');
Route::post('page', [pageController::class, 'update'])->name('page.update');

Route::get('page1', [pagePenyebabController::class, 'index'])->name('page1.index');
Route::post('page1', [pagePenyebabController::class, 'update'])->name('page1.update');

Route::resource('rumah-sakit', rumahsakitController::class);

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage linked successfully!';
});


Route::post('upload', [pageController::class, 'upload'])->name('ckeditor.upload');


// Role
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/role', [roleController::class, 'index'])->middleware('cekRole');
    Route::post('/choose-role', [roleController::class, 'chooseRole']);
    Route::resource('/artikel', artikelDokterController::class);
    Route::resource('/konsultasi', konsultasiController::class);
});


// Route::get('/konsultasi', function () {
//     return view('konsultasi');
// });

Route::get('/detail-konsultasi', function () {
    return view('detail-konsultasi');
});

// Route::get('/landingpage', function () {
//     return view('detail-konsultasi');
// });

// ARJUN UPDATE
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resources([
        '/ayo-jauhi-narkoba' => AyoJauhiNarkoba::class,
        '/ayo-mengenali-aku' => AyoMengenaliAku::class,
        '/accurate-self-assesment' => AccurateSelfAssesment::class,
        '/self-confidence' => SelfConfidence::class,
        '/jurnal-emosi' => JurnalEmosi::class,
        '/jurnal-mindfulness' => JurnalMindfulness::class,
        '/emotional-awareness' => EmotionalAwareness::class,
    ]);
    Route::post('/accurate-self-assesment/tes-instrumen', [AccurateSelfAssesment::class, 'tesInstrumen'])->name('accurate-self-assesment.tes-instrumen');
    Route::post('/accurate-self-assesment/refleksi-diri', [AccurateSelfAssesment::class, 'refleksiDiri'])->name('accurate-self-assesment.refleksi-diri');
    Route::post('/self-confidence/penguatan-diri', [SelfConfidence::class, 'storelkpenguatandiri'])->name('self-confidence.penguatan-diri');
    Route::post('/self-confidence/self-confidence', [SelfConfidence::class, 'storelkselfconfidence'])->name('self-confidence.self-confidence');

    Route::prefix('guru')->name('guru.')->group(function () {
        Route::resource('', GuruController::class);
        Route::resource('/ayo-jauhi-narkoba', AyoJauhiNarkobaGuru::class);
        Route::resource('/emotional-awareness', EmotionalAwarenessGuru::class);
        Route::resource('/accurate-self-assesment', AccurateSelfAssesmentGuru::class);
        Route::resource('/self-confidence', SelfConfidentGuru::class);
    });
});
