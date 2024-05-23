<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminBemController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminLdkController;
use App\Http\Controllers\AdminHimasiController;
use App\Http\Controllers\AdminHimaifController;
use App\Http\Controllers\AdminFutsalController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AdminTeknikinformatikaController;
use App\Http\Controllers\AdminSisteminformasiController;
use App\Http\Controllers\AdminPimpinanController;
use App\Http\Controllers\AdminSejarahController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminStrukturorganisasiController;
use App\Http\Controllers\AdminUkmController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminVisimisiController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//----------HUBUNGAN ADMIN DAN HOME----------//
Route::get('/', [HomeController::class,'index']);
//Home About
Route::get('/visi_dan_misi', [HomeController::class,'visimisi']);
Route::get('/struktur_organisasi', [HomeController::class,'strukturorganisasi']);
Route::get('/pimpinan', function (){
   $data = [
      'content' => 'home/about/pimpinan/index'
   ];
   return view('home.layouts.wrapper', $data);
});
//Home Pendidikan
Route::get('/sistem_informasi', [HomeController::class,'sisteminformasi']);
Route::get('/teknik_informatika', [HomeController::class,'teknikinformatika']);
//Home Kemahasiswaan
Route::get('/bem', [HomeController::class,'bem']);
Route::get('/ldk', [HomeController::class,'ldk']);
Route::get('/himaif', [HomeController::class,'himaif']);
Route::get('/himasi', [HomeController::class,'himasi']);
Route::get('/futsal', [HomeController::class,'futsal']);
//Home Sejarah
Route::get('/sejarah', [HomeController::class,'sejarah']);
//Home Contact
Route::get('/contact', [HomeContactController::class,'index']);
Route::post('/contact/send', [HomeContactController::class,'send']);


Route::get('/pendidikan', function (){
   $data = [
      'content' => 'home/pendidikan/index'
   ];
   return view('home.layouts.wrapper', $data);
});



Route::get('/ukm', function (){
   $data = [
      'content' => 'home/ukm/index'
   ];
   return view('home.layouts.wrapper', $data);
});


Route::get('/pmb', function (){
   $data = [
      'content' => 'home/pmb/index'
   ];
   return view('home.layouts.wrapper', $data);
});




Route::get('/login', [AdminAuthController::class,'index'])->name('login')->middleware('guest');
Route::post('login/do', [AdminAuthController::class,'doLogin']);

//---------------AKUN ADMIN LOGIN-------------------//
Route::prefix('/admin')->middleware('auth')->group(function (){

   //Logout
   Route::get('/logout', [AdminAuthController::class,'logout']);

   Route::get('/dashboard', [AdminDashboardController::class,'index']);

   // Admin halaman UKM
   Route::get('/ukm', [AdminUkmController::class, 'index']);
   Route::put('/ukm/update', [AdminUkmController::class, 'update']);

   // Admin halaman About
   Route::get('/about/visimisi', [AdminVisimisiController::class, 'index']);
   Route::put('/about/visimisi/update', [AdminVisimisiController::class, 'update']);
   // Route::get('/about/pimpinan', [AdminPimpinanController::class, 'index']);
   // Route::put('/about/pimpinan/update', [AdminPimpinanController::class, 'update']);
   Route::get('/about/strukturorganisasi', [AdminStrukturorganisasiController::class, 'index']);
   Route::put('/about/strukturorganisasi/update', [AdminStrukturorganisasiController::class, 'update']);

   // halaman kemahasiswaan
   Route::get('/kemahasiswaan/bem', [AdminBemController::class, 'index']);
   Route::put('/kemahasiswaan/bem/update', [AdminBemController::class, 'update']);
   Route::get('/kemahasiswaan/ldk', [AdminLdkController::class, 'index']);
   Route::put('/kemahasiswaan/ldk/update', [AdminLdkController::class, 'update']);
   Route::get('/kemahasiswaan/himasi', [AdminHimasiController::class, 'index']);
   Route::put('/kemahasiswaan/himasi/update', [AdminHimasiController::class, 'update']);
   Route::get('/kemahasiswaan/himaif', [AdminHimaifController::class, 'index']);
   Route::put('/kemahasiswaan/himaif/update', [AdminHimaifController::class, 'update']);
   Route::get('/kemahasiswaan/futsal', [AdminFutsalController::class, 'index']);
   Route::put('/kemahasiswaan/futsal/update', [AdminFutsalController::class, 'update']);

   // halaman kemahasiswaan
   Route::get('/pendidikan/teknikinformatika', [AdminTeknikinformatikaController::class, 'index']);
   Route::put('/pendidikan/teknikinformatika/update', [AdminTeknikinformatikaController::class, 'update']);
   Route::get('/pendidikan/sisteminformasi', [AdminSisteminformasiController::class, 'index']);
   Route::put('/pendidikan/sisteminformasi/update', [AdminSisteminformasiController::class, 'update']);

   //Blog
   Route::resource('/posts/blog', AdminBlogController::class);
   Route::resource('/posts/kategori', AdminKategoriController::class);

   //Sejarah
   Route::get('/sejarah', [AdminSejarahController::class, 'index']);
   Route::put('/sejarah/update', [AdminSejarahController::class, 'update']);


   Route::resource('/pesan', AdminPesanController::class);

   Route::resource('/service', AdminServiceController::class);

   Route::resource('/banner', AdminBannerController::class);

   Route::resource('/user', AdminUserController::class);
});