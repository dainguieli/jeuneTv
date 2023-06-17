<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\silderController;
use App\Models\direct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeClientsController;
use App\Models\video;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('home.acceuil');
});
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'home_viste']);
Route::group(['middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');

    Route::get('/acceuil', [App\Http\Controllers\HomeController::class, 'acceuil'])->name('acceuil');
    Route::get('/filmCategorie', [App\Http\Controllers\HomeController::class, 'filmCategorie'])->name('filmCategorie');
    Route::get('/programme', [App\Http\Controllers\HomeController::class, 'programme'])->name('programme');
    Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
    Route::get('/detailfilm/{id}', [App\Http\Controllers\HomeController::class, 'detailfilm'])->name('detailfilm');

    Route::get('/Direct', [App\Http\Controllers\HomeController::class, 'Direct'])->name('Direct');

    Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
    Route::get('/jeunMag', [App\Http\Controllers\HomeController::class, 'jeunMag'])->name('jeunMag');
    Route::get('/magasins', [App\Http\Controllers\HomeController::class, 'magasins'])->name('magasins');
    Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');

    Route::get('/privacy_policy', [App\Http\Controllers\HomeController::class, 'privacy_policy'])->name('privacy_policy');
    

    //categorie
    Route::get('/admin/AjouterCategorie', [App\Http\Controllers\HomeController::class, 'AjouterCategorie'])->name('admin.AjouterCategorie');
    Route::get('/admin/categorie', [App\Http\Controllers\HomeController::class, 'categorie'])->name('admin.categorie');
    Route::delete('admin/supprimerCategorie/{id}', [CategorieController::class, 'supprimerCategorie'])->name('supprimerCategorie');
    Route::get('admin/modifierCategorie/{id}', [CategorieController::class, 'modifierCategorie'])->name('modifierCategorie');
    Route::put('admin/mise_a_jour_Categorie/{id}', [CategorieController::class, 'mise_a_jour_Categorie'])->name('mise_a_jour_Categorie');
    Route::post('/admin/creerCategorie', [CategorieController::class, 'creerCategorie'])->name('admin.creerCategorie');
    //video
    Route::get('/admin/AjouterVideo', [App\Http\Controllers\HomeController::class, 'AjouterVideo'])->name('admin.AjouterVideo');
    Route::get('/admin/video', [App\Http\Controllers\HomeController::class, 'video'])->name('admin.video');
    Route::post('/admin/EnregisterVideo', [App\Http\Controllers\VideoController::class, 'ajouterVideo'])->name('admin.enregisterVideo');
    Route::delete('admin/supprimerVideo/{id}', [VideoController::class, 'supprimerVideo'])->name('supprimerVideo');
    Route::get('admin/modifierVideo/{id}', [VideoController::class, 'modifierVideo'])->name('modifierVideo');
    Route::put('admin/mise_a_jour_Video/{id}', [VideoController::class, 'mise_a_jour_Video'])->name('mise_a_jour_Video');
    Route::put('admin/desactiveVideo/{id}', [videoController::class, 'desactive'])->name('desactive');
    Route::put('admin/activeVideo/{id}', [videoController::class, 'active'])->name('active');
    //silder controller
    Route::post('/admin/creerSilder', [silderController::class, 'creerSilder'])->name('AjouterSilder');
    Route::delete('admin/supprimerSilder/{id}', [silderController::class, 'supprimerSilder'])->name('supprimerSilder');
    Route::get('admin/modifierSilder/{id}', [silderController::class, 'modifierSilder'])->name('modifierSilder');
    Route::put('admin/mise_a_jour_Silder/{id}', [silderController::class, 'mise_a_jour_Silder'])->name('mise_a_jour_Silder');
    Route::put('admin/desactiveSlider/{id}', [silderController::class, 'desactive'])->name('desactive');
    Route::put('admin/activeSlider/{id}', [silderController::class, 'active'])->name('active');
    Route::get('/admin/AjouterSilder', [App\Http\Controllers\HomeController::class, 'AjouterSilder'])->name('AjouterSilder');
    Route::get('/admin/silder', [App\Http\Controllers\HomeController::class, 'silder'])->name('silder');
// utilisateur
  Route::get('/admin/Liste_des_utilisateurs', [App\Http\Controllers\HomeController::class, 'Liste_des_utilisateurs'])->name('admin.Liste_des_utilisateurs');
    //profile admin
    Route::post('admin/update-profile-info',[App\Http\Controllers\HomeController::class,'updateInfo'])->name('adminUpdateInfo');
    Route::post('admin/change-profile-picture',[App\Http\Controllers\HomeController::class,'updatePicture'])->name('adminPictureUpdate');
    Route::post('admin/change-password',[App\Http\Controllers\HomeController::class,'changePassword'])->name('adminChangePassword');
    Route::get('admin/profile',[App\Http\Controllers\HomeController::class,'profile'])->name('adminprofile');
});


Route::group(['middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
    Route::get('/acceuil', [App\Http\Controllers\HomeClientsController::class, 'index'])->name('index');
    Route::get('/filmCategorie', [App\Http\Controllers\HomeClientsController::class, 'filmCategorie'])->name('filmCategorie');
    Route::get('/programme', [App\Http\Controllers\HomeClientsController::class, 'programme'])->name('programme');
    Route::get('/contact', [App\Http\Controllers\HomeClientsController::class, 'contact'])->name('contact');
    Route::get('/detailfilm', [App\Http\Controllers\HomeClientsController::class, 'detailfilm'])->name('detailfilm');

    Route::get('/Direct', [App\Http\Controllers\HomeClientsController::class, 'Direct'])->name('Direct');

    Route::get('/about', [App\Http\Controllers\HomeClientsController::class, 'about'])->name('about');
    Route::get('/jeunMag', [App\Http\Controllers\HomeClientsController::class, 'jeunMag'])->name('jeunMag');
    Route::get('/magasins', [App\Http\Controllers\HomeClientsController::class, 'magasins'])->name('magasins');
    Route::get('/faq', [App\Http\Controllers\HomeClientsController::class, 'faq'])->name('faq');

    Route::get('/privacy_policy', [App\Http\Controllers\HomeClientsController::class, 'privacy_policy'])->name('privacy_policy');
    Route::get('/profile', [App\Http\Controllers\HomeClientsController::class, 'profile'])->name('profile');
    Route::get('user', [HomeClientsController::class, 'index'])->name('user.home');
    Route::put('admin/mise_a_jour_user/{id}', [App\Http\Controllers\HomeClientsController::class, 'mise_a_jour_user'])->name('mise_a_jour_user');
});

Auth::routes();
//HomeController
