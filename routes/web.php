<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


use App\Http\Livewire\Project\HomeComponent;
use App\Http\Livewire\Project\BlogComponent;
use App\Http\Livewire\Project\AboutComponent;
use App\Http\Livewire\Project\GaleryComponent;
use App\Http\Livewire\GaleryDetailComponent;
use App\Http\Livewire\Project\VideoDetailComponent;
use App\Http\Livewire\Project\WhatdoComponent;
use App\Http\Controllers\HumanController;
use App\Http\Livewire\Project\CertificaComponent;
use App\Http\Livewire\Project\PopupComponent;
use App\Http\Livewire\Project\Whatdo\WhatdoDetailComponent;
use App\Http\Livewire\Project\Blog\BlogDetailComponent;
use App\Http\Livewire\Project\ContactComponent;
use App\Http\Livewire\Project\TeamComponent;
use App\Http\Livewire\Project\QuestionsComponent;
use App\Http\Livewire\Project\Category\CategoryDetailComponent;
use App\Http\Livewire\Project\Aducation\System\SystemDetailComponent;
use App\Http\Livewire\Project\Aducation\Units\UnitDetailComponent;


use App\Http\Livewire\Project\Aducation\Social\Category\SocialCategoryDetailComponent;
use App\Http\Livewire\Project\Aducation\Social\Category\SocialCategoryComponent;





use App\Http\Livewire\Admin\AdminHomeComponent;
use App\Http\Livewire\Admin\LoginComponent;
use App\Http\Livewire\Admin\User\AdminUserComponent;
use App\Http\Livewire\Admin\User\AdminUserAddComponent;
use App\Http\Livewire\Admin\User\AdminUserEditComponent;

use App\Http\Livewire\Admin\PopUp\AdminPopupComponent;
use App\Http\Livewire\Admin\PopUp\AdminPopupEditComponent;


use App\Http\Livewire\Project\SearchComponent;
use App\Http\Livewire\Project\HumanResourcesComponent;


use App\Http\Livewire\Admin\AdminAboutComponent;
use App\Http\Livewire\Admin\About\AboutEditComponent;

use App\Http\Livewire\Admin\Video\VideoComponent;
use App\Http\Livewire\Admin\Video\VideoAddComponent;
use App\Http\Livewire\Admin\Video\VideoEditComponent;

use App\Http\Livewire\Admin\AdminBlogComponent;
use App\Http\Livewire\Admin\Blog\BlogAddComponent;
use App\Http\Livewire\Admin\Blog\BlogEditComponent;
use App\Http\Livewire\Admin\AdminMenuComponent;
use App\Http\Livewire\Admin\AdminQuesitionsComponent;
use App\Http\Livewire\Admin\AdminSettingComponent;
use App\Http\Livewire\Admin\AdminTeamComponent;
use App\Http\Livewire\Admin\AdminGaleryComponent;
use App\Http\Livewire\Admin\AdminWhatDoingComponent;
use App\Http\Livewire\Admin\AdminNotificationComponent;
use App\Http\Livewire\Admin\Human\AdminHumanComponent;


use App\Http\Livewire\Admin\Galery\GaleryAddComponent;
use App\Http\Livewire\Admin\Galery\GaleryEditComponent;
use App\Http\Livewire\Admin\Galery\Category\AdminGaleryCategoryAddComponent;
use App\Http\Livewire\Admin\Galery\Category\AdminGaleryCategoryEditComponent;
use App\Http\Livewire\Admin\Galery\Image\AdminImageAddComponent;
use App\Http\Livewire\Admin\Galery\Image\AdminImageEditComponent;


use App\Http\Livewire\Admin\Quaestion\QuestionAddComponent;
use App\Http\Livewire\Admin\Quaestion\QuestionEditComponent;

use App\Http\Livewire\Admin\Team\TeamAddComponent;
use App\Http\Livewire\Admin\Team\TeamEditComponent;
use App\Http\Livewire\Admin\Aducation\Social\Category\AdminSocialCategoryComponent;
use App\Http\Livewire\Admin\Aducation\Social\Category\AdminSocialCategoryAddComponent;
use App\Http\Livewire\Admin\Aducation\Social\Category\AdminSocialCategoryUpdateComponent;


use App\Http\Livewire\Admin\Aducation\Social\AdminSocialComponent;
use App\Http\Livewire\Admin\Aducation\Social\AdminAddComponent;
use App\Http\Livewire\Admin\Aducation\Social\AdminUpdateComponent;


use App\Http\Livewire\Admin\Aducation\System\SystemAddComponent;
use App\Http\Livewire\Admin\Aducation\System\SystemComponent;
use App\Http\Livewire\Admin\Aducation\System\SystemUpdateComponent;


use App\Http\Livewire\Admin\Aducation\Units\UnitsAddComponent;
use App\Http\Livewire\Admin\Aducation\Units\UnitsComponent;
use App\Http\Livewire\Admin\Aducation\Units\UnitsUpdateComponent;




use App\Http\Livewire\Admin\Whatdo\WhatDoingAddComponent;
use App\Http\Livewire\Admin\Whatdo\WhatDoingEditComponent;



use App\Http\Livewire\Admin\Bursluluk\AdminBurslulukComponent;
use App\Http\Livewire\Admin\Bursluluk\AdminBurslulukEditComponent;

use App\Http\Livewire\Admin\AdminSliderComponent;
use App\Http\Livewire\Admin\Slider\SliderAddComponent;
use App\Http\Livewire\Admin\Slider\SliderEditComponent;

//

use App\Http\Livewire\Admin\Applications\ApplicationComponent;

use App\Http\Livewire\Admin\Category\CategoryAddComponent;
use App\Http\Livewire\Admin\Category\CategoryEditComponent;


use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\Accept\AcceptedComponent;
use App\Http\Livewire\Admin\Lock\LockComponent;
use App\Http\Livewire\Project\Thanks\ThankyouComponent;
use App\Http\Livewire\Project\Aducation\Social\SocialDetailComponent;



use App\Http\Livewire\Admin\AdminHelpComponent;
use App\Http\Livewire\Admin\Setting\SettingEditComponent;
use App\Http\Livewire\Admin\Classroom\AdminClassRoomComponent;
use App\Http\Livewire\Admin\Classroom\AdminClassRoomAddComponent;
use App\Http\Livewire\Admin\Classroom\AdminClassRoomEditComponent;

use App\Http\Livewire\Test\TestComponent;
use App\Http\Livewire\Test\TestEditComponent;
use App\Http\Livewire\Project\BusinessPartnerComponent;
use App\Http\Livewire\Project\Class\ClassDetailComponent;
use App\Http\Controllers\MailController;


// use App\Http\Livewire\Admin\Auth\LoginComponent;

use App\Http\Controllers\BasvuruController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/test', function () {
    return Inertia::render('test');
})->name('test');


   Route::middleware(['auth:sanctum', 'verified'])->get('/register', function () {
        return Inertia::render('register');
    })->name('register');


*/
Route::get('/foo', function () {
    Artisan::call('storage:link');
    });

    Route::post('/send' , [MailController::class , 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/thankyou' , ThankyouComponent::class)->name('thankyou');
Route::get('/basvurular' , SearchComponent::class );
// Route::get('/basvurular/olustur/{name}' , [BasvuruController::class, 'pdfGenerate' ])->name('generate');

Route::middleware(['auth:sanctum', 'verified'])->get('/logout', function () {
    return Inertia::render('/');
})->name('logout');
Route::post('/sinav/basvurusu/mesa' , [BasvuruController::class , 'addApp'])->name('add.basvuru');
Route::post('/sinav/basvurusu/olustur/{name}' , [BasvuruController::class , 'pdfGenerate'])->name('generate.pdf');



Route::get('/' , HomeComponent::class);
Route::get('/elysium/login' , LoginComponent::class);
Route::get('/popup' , PopupComponent::class);
Route::get('/basvur' , HumanResourcesComponent::class);
Route::get('/belge-ve-sertifikalarımız' , CertificaComponent::class);
Route::get('/galeri' , GaleryComponent::class);
Route::get('/hakkimizda' , AboutComponent::class);  
 Route::get('/sss' , QuestionsComponent::class);
 Route::get('/duyurular' , WhatdoComponent::class);
 Route::get('/kurumsal/egitim-kadromuz' , TeamComponent::class);
 Route::get('/haberler' , BlogComponent::class);
 Route::get('/bize-ulasin' , ContactComponent::class);
 Route::get('/is-ortaklarimiz' , BusinessPartnerComponent::class);
 Route::get('/sinif/detay/{classroom_id}' , ClassDetailComponent::class)->name('class.detail');


  Route::get('/egitim-sistemleri/{slug}', SystemDetailComponent::class)->name('system.detail');
  Route::get('/egitim-birimleri/{slug}', UnitDetailComponent::class)->name('unit.detail');
  Route::get('/duyuru/{slug}', WhatdoDetailComponent::class)->name('whatdo.detail');
  Route::get('/haber/{slug}', BlogDetailComponent::class)->name('blog.detail');
  Route::get('/kategori/{category_slug}', CategoryDetailComponent::class)->name('blog.category');
  
 Route::get('/sosyal-etkinlikler/{category_slug}', SocialCategoryDetailComponent::class)->name('social.category');
 Route::get('/sosyal-etkinlikler/detay/{slug}', SocialDetailComponent::class)->name('social.detail');


  Route::post('/sinav/basvurusu/onayla' , [BasvuruController::class , 'addApprow'])->name('add.basvuru.onay');



  Route::get('/galery/{slug}', GaleryDetailComponent::class)->name('galery.detail');
  Route::get('/video/{slug}', VideoDetailComponent::class)->name('video.detail');




  Route::post('/basvurusu/gonder' , [HumanController::class , 'addCv'])->name('add.basvuru.cv');








Route::middleware(['auth:sanctum' , 'verified'])->group(function() {



 
Route::get('/admin/home' , AdminHomeComponent::class)->name('admin.home');

// PopUp

Route::get('/admin/popup' , AdminPopupComponent::class)->name('admin.popup');
Route::get('/admin/popup/{popup_id}' , AdminPopupEditComponent::class)->name('admin.popup.edit');


// Slider Yönetimi 

Route::get('/admin/slider' , AdminSliderComponent::class)->name('admin.slider');
Route::get('/admin/slider/add' , SliderAddComponent::class)->name('admin.slider.add');
Route::get('/admin/slider/edit/{slider_id}' , SliderEditComponent::class)->name('admin.slider.edit');


Route::get('/admin/galery/category/add' , AdminGaleryCategoryAddComponent::class)->name('admin.galery.cagetory.add');
Route::get('/admin/galery/category/edit/{category_id}' , AdminGaleryCategoryEditComponent::class)->name('admin.galery.cagetory.edit');

Route::get('/admin/galery/add/title' , AdminImageAddComponent::class)->name('admin.galery.image.add');
Route::get('/admin/galery/edit/title/{blog_id}' , AdminImageEditComponent::class)->name('admin.galery.image.edit');



Route::get('/admin/settings' , AdminSettingComponent::class)->name('admin.setting');
Route::get('/admin/settings/edit/{setting_id}' , SettingEditComponent::class)->name('admin.setting.edit');


Route::get('/admin/about' , AdminAboutComponent::class)->name('admin.about');
Route::get('/admin/about/edit/{about_id}' , AboutEditComponent::class)->name('admin.about.edit');



Route::get('/admin/bursluluk' , AdminBurslulukComponent::class)->name('admin.bursluluk');
Route::get('/admin/bursluluk/{scholarship_id}' , AdminBurslulukEditComponent::class)->name('admin.bursluluk.edit');
// Admin Blog 

Route::get('/admin/blog' , AdminBlogComponent::class)->name('admin.blog');
Route::get('/admin/is-basvurulari' , AdminHumanComponent::class)->name('admin.human');

// Bildirimler
Route::get('/admin/notification' , AdminNotificationComponent::class)->name('admin.notification');

Route::get('/admin/blog/add' , BlogAddComponent::class)->name('admin.blog.add');
Route::get('/admin/blog/edit/{blog_id}' , BlogEditComponent::class)->name('admin.blog.edit');

// Admin Blog Category

Route::get('/admin/category' , AdminCategoryComponent::class)->name('admin.category');
Route::get('/admin/category/add' , CategoryAddComponent::class)->name('admin.category.add');
Route::get('/admin/category/edit/{category_id}' , CategoryEditComponent::class)->name('admin.category.edit');


// Kategori Sosyal 

Route::get('/admin/category/social' , AdminSocialCategoryComponent::class)->name('admin.category.social');
Route::get('/admin/category/social/add' , AdminSocialCategoryAddComponent::class)->name('admin.category.social.add');
Route::get('/admin/category/social/edit/{category_id}' , AdminSocialCategoryUpdateComponent::class)->name('admin.category.social.edit');

// Sosyal Etkinlikler
Route::get('/admin/social' , AdminSocialComponent::class)->name('admin.social');

Route::get('/admin/social/add' , AdminAddComponent::class)->name('admin.social.add');
Route::get('/admin/social/edit/{blog_id}' , AdminUpdateComponent::class)->name('admin.social.edit');


// Eğitim Sistemi
Route::get('/admin/system' , SystemComponent::class)->name('admin.system');

Route::get('/admin/system/add' , SystemAddComponent::class)->name('admin.system.add');
Route::get('/admin/system/edit/{blog_id}' , SystemUpdateComponent::class)->name('admin.system.edit');

// Kullanıcı İşlemleri

Route::get('/admin/user' , AdminUserComponent::class)->name('admin.user');
Route::get('/admin/user/add' , AdminUserAddComponent::class)->name('admin.user.add');
Route::get('/admin/user/edit/{user_id}' , AdminUserEditComponent::class)->name('admin.user.edit');

// Video 
Route::get('/admin/video' , VideoComponent::class)->name('admin.video');

Route::get('/admin/video/add' , VideoAddComponent::class)->name('admin.video.add');
Route::get('/admin/video/edit/{blog_id}' , VideoEditComponent::class)->name('admin.video.edit');

// Eğitim Birimleri
Route::get('/admin/units' , UnitsComponent::class)->name('admin.units');

Route::get('/admin/units/add' , UnitsAddComponent::class)->name('admin.units.add');
Route::get('/admin/units/edit/{blog_id}' , UnitsUpdateComponent::class)->name('admin.units.edit');



// Admin Galery

Route::get('/admin/galery' , AdminGaleryComponent::class)->name('admin.galery');
Route::get('/admin/galery/add' , GaleryAddComponent::class)->name('admin.galery.add');


// Admin Quastions

// Route::get('/admin/quastion' , AdminQuastionsComponent::class)->name('admin.quastion');
// Route::get('/admin/quastion/add' , QuastionAddComponent::class)->name('admin.quastion.add');
// Route::get('/admin/quastion/edit/{quastion_id}' , QuastionEditComponent::class)->name('admin.quastion.edit');

// Admin Team

Route::get('/admin/team' , AdminTeamComponent::class)->name('admin.team');
 Route::get('/admin/team/add' , TeamAddComponent::class)->name('admin.team.add');
 Route::get('/admin/team/edit/{lawyer_id}' , TeamEditComponent::class)->name('admin.team.edit');    


// Admin Neler Yapıyoruz

Route::get('/admin/what-do' , AdminWhatDoingComponent::class)->name('admin.whatdo');
 Route::get('/admin/what-do/add' , WhatDoingAddComponent::class)->name('admin.whatdo.add');
Route::get('/admin/what-do/edit/{whatdo_id}' , WhatDoingEditComponent::class)->name('admin.whatdo.edit');






// Admin Blog Category

// Route::get('/admin/quastion' , AdminCategoryComponent::class)->name('admin.quastion');
// Route::get('/admin/quastion/add' , CategoryAddComponent::class)->name('admin.quastion.add');

// Route::get('/admin/account' , AdminAccountComponent::class)->name('admin.account');

// Route::get('/admin/users' , AdminUsersComponent::class)->name('admin.users');


// Route::get('/admin/graphich' , AdminGraphicComponent::class)->name('admin.graphic');
 Route::get('/admin/help' , AdminHelpComponent::class)->name('admin.help');

Route::get('/admin/team' , AdminTeamComponent::class)->name('admin.team');


Route::get('/admin/questions' , AdminQuesitionsComponent::class)->name('admin.question');
Route::get('/admin/questions/add' , QuestionAddComponent::class)->name('admin.question.add');
Route::get('/admin/questions/edit/{question_id}' , QuestionEditComponent::class)->name('admin.question.edit');

Route::get('/admin/menu' , AdminMenuComponent::class)->name('admin.menu');


// Başvuru Listeleme
Route::get('/admin/applications' , ApplicationComponent::class)->name('admin.app');
Route::get('/admin/onaylanan/basvurular' , AcceptedComponent::class)->name('admin.app.bas');
Route::get('/admin/kilit/{lock_id}' , LockComponent::class)->name('admin.lock.edit');


//Room Add Component

Route::get('/admin/class' , AdminClassRoomComponent::class)->name('admin.class');
Route::get('/admin/class/add' , AdminClassRoomAddComponent::class)->name('admin.class.add');
Route::get('/admin/class/edit/{class_id}' , AdminClassRoomEditComponent::class)->name('admin.class.edit');


Route::get('/test/test' , TestComponent::class)->name('test');
Route::get('/test/test/{setting_id}' , TestEditComponent::class)->name('test.edit');



});

