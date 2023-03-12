<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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



	Route::get('', 'IndexController@index')->name('index')->middleware(['redirect.to.home']);
	Route::get('index/login', 'IndexController@login')->name('login');
	
	Route::post('auth/login', 'AuthController@login')->name('auth.login');
	Route::any('auth/logout', 'AuthController@logout')->name('logout')->middleware(['auth']);

	Route::get('auth/accountcreated', 'AuthController@accountcreated')->name('accountcreated');
	Route::get('auth/accountpending', 'AuthController@accountpending')->name('accountpending');
	Route::get('auth/accountblocked', 'AuthController@accountblocked')->name('accountblocked');
	Route::get('auth/accountinactive', 'AuthController@accountinactive')->name('accountinactive');


	
	Route::get('auth/register', 'AuthController@register')->name('auth.register')->middleware(['redirect.to.home']);
	Route::post('auth/register', 'AuthController@register_store')->name('auth.register_store');
		
	Route::post('auth/login', 'AuthController@login')->name('auth.login');
	Route::get('auth/password/forgotpassword', 'AuthController@showForgotPassword')->name('password.forgotpassword');
	Route::post('auth/password/sendemail', 'AuthController@sendPasswordResetLink')->name('password.email');
	Route::get('auth/password/reset', 'AuthController@showResetPassword')->name('password.reset.token');
	Route::post('auth/password/resetpassword', 'AuthController@resetPassword')->name('password.resetpassword');
	Route::get('auth/password/resetcompleted', 'AuthController@passwordResetCompleted')->name('password.resetcompleted');
	Route::get('auth/password/linksent', 'AuthController@passwordResetLinkSent')->name('password.resetlinksent');
	

/**
 * All routes which requires auth
 */
Route::middleware(['auth', 'rbac'])->group(function () {
		
	Route::get('home', 'HomeController@index')->name('home');

	

/* routes for Akuns Controller */	
	Route::get('akuns', 'AkunsController@index')->name('akuns.index');
	Route::get('akuns/index', 'AkunsController@index')->name('akuns.index');
	Route::get('akuns/index/{filter?}/{filtervalue?}', 'AkunsController@index')->name('akuns.index');	
	Route::get('akuns/view/{rec_id}', 'AkunsController@view')->name('akuns.view');
	Route::get('akuns/masterdetail/{rec_id}', 'AkunsController@masterDetail')->name('akuns.masterdetail');	
	Route::get('akuns/add', 'AkunsController@add')->name('akuns.add');
	Route::post('akuns/add', 'AkunsController@store')->name('akuns.store');
		
	Route::any('akuns/edit/{rec_id}', 'AkunsController@edit')->name('akuns.edit');	
	Route::get('akuns/delete/{rec_id}', 'AkunsController@delete');

/* routes for Izinkepegawaians Controller */	
	Route::get('izinkepegawaians', 'IzinkepegawaiansController@index')->name('izinkepegawaians.index');
	Route::get('izinkepegawaians/index', 'IzinkepegawaiansController@index')->name('izinkepegawaians.index');
	Route::get('izinkepegawaians/index/{filter?}/{filtervalue?}', 'IzinkepegawaiansController@index')->name('izinkepegawaians.index');	
	Route::get('izinkepegawaians/view/{rec_id}', 'IzinkepegawaiansController@view')->name('izinkepegawaians.view');	
	Route::get('izinkepegawaians/add', 'IzinkepegawaiansController@add')->name('izinkepegawaians.add');
	Route::post('izinkepegawaians/add', 'IzinkepegawaiansController@store')->name('izinkepegawaians.store');
		
	Route::any('izinkepegawaians/edit/{rec_id}', 'IzinkepegawaiansController@edit')->name('izinkepegawaians.edit');	
	Route::get('izinkepegawaians/delete/{rec_id}', 'IzinkepegawaiansController@delete');

/* routes for Kegiatans Controller */	
	Route::get('kegiatans', 'KegiatansController@index')->name('kegiatans.index');
	Route::get('kegiatans/index', 'KegiatansController@index')->name('kegiatans.index');
	Route::get('kegiatans/index/{filter?}/{filtervalue?}', 'KegiatansController@index')->name('kegiatans.index');	
	Route::get('kegiatans/view/{rec_id}', 'KegiatansController@view')->name('kegiatans.view');
	Route::get('kegiatans/masterdetail/{rec_id}', 'KegiatansController@masterDetail')->name('kegiatans.masterdetail');	
	Route::get('kegiatans/add', 'KegiatansController@add')->name('kegiatans.add');
	Route::post('kegiatans/add', 'KegiatansController@store')->name('kegiatans.store');
		
	Route::any('kegiatans/edit/{rec_id}', 'KegiatansController@edit')->name('kegiatans.edit');	
	Route::get('kegiatans/delete/{rec_id}', 'KegiatansController@delete');

/* routes for Komponens Controller */	
	Route::get('komponens', 'KomponensController@index')->name('komponens.index');
	Route::get('komponens/index', 'KomponensController@index')->name('komponens.index');
	Route::get('komponens/index/{filter?}/{filtervalue?}', 'KomponensController@index')->name('komponens.index');	
	Route::get('komponens/view/{rec_id}', 'KomponensController@view')->name('komponens.view');
	Route::get('komponens/masterdetail/{rec_id}', 'KomponensController@masterDetail')->name('komponens.masterdetail');	
	Route::get('komponens/add', 'KomponensController@add')->name('komponens.add');
	Route::post('komponens/add', 'KomponensController@store')->name('komponens.store');
		
	Route::any('komponens/edit/{rec_id}', 'KomponensController@edit')->name('komponens.edit');	
	Route::get('komponens/delete/{rec_id}', 'KomponensController@delete');

/* routes for Notulensis Controller */	
	Route::get('notulensis', 'NotulensisController@index')->name('notulensis.index');
	Route::get('notulensis/index', 'NotulensisController@index')->name('notulensis.index');
	Route::get('notulensis/index/{filter?}/{filtervalue?}', 'NotulensisController@index')->name('notulensis.index');	
	Route::get('notulensis/view/{rec_id}', 'NotulensisController@view')->name('notulensis.view');	
	Route::get('notulensis/add', 'NotulensisController@add')->name('notulensis.add');
	Route::post('notulensis/add', 'NotulensisController@store')->name('notulensis.store');
		
	Route::any('notulensis/edit/{rec_id}', 'NotulensisController@edit')->name('notulensis.edit');	
	Route::get('notulensis/delete/{rec_id}', 'NotulensisController@delete');

/* routes for Outputs Controller */	
	Route::get('outputs', 'OutputsController@index')->name('outputs.index');
	Route::get('outputs/index', 'OutputsController@index')->name('outputs.index');
	Route::get('outputs/index/{filter?}/{filtervalue?}', 'OutputsController@index')->name('outputs.index');	
	Route::get('outputs/view/{rec_id}', 'OutputsController@view')->name('outputs.view');
	Route::get('outputs/masterdetail/{rec_id}', 'OutputsController@masterDetail')->name('outputs.masterdetail');	
	Route::get('outputs/add', 'OutputsController@add')->name('outputs.add');
	Route::post('outputs/add', 'OutputsController@store')->name('outputs.store');
		
	Route::any('outputs/edit/{rec_id}', 'OutputsController@edit')->name('outputs.edit');	
	Route::get('outputs/delete/{rec_id}', 'OutputsController@delete');

/* routes for Penugasans Controller */	
	Route::get('penugasans', 'PenugasansController@index')->name('penugasans.index');
	Route::get('penugasans/index', 'PenugasansController@index')->name('penugasans.index');
	Route::get('penugasans/index/{filter?}/{filtervalue?}', 'PenugasansController@index')->name('penugasans.index');	
	Route::get('penugasans/view/{rec_id}', 'PenugasansController@view')->name('penugasans.view');	
	Route::get('penugasans/add', 'PenugasansController@add')->name('penugasans.add');
	Route::post('penugasans/add', 'PenugasansController@store')->name('penugasans.store');
		
	Route::any('penugasans/edit/{rec_id}', 'PenugasansController@edit')->name('penugasans.edit');	
	Route::get('penugasans/delete/{rec_id}', 'PenugasansController@delete');

/* routes for Permissions Controller */	
	Route::get('permissions', 'PermissionsController@index')->name('permissions.index');
	Route::get('permissions/index', 'PermissionsController@index')->name('permissions.index');
	Route::get('permissions/index/{filter?}/{filtervalue?}', 'PermissionsController@index')->name('permissions.index');	
	Route::get('permissions/view/{rec_id}', 'PermissionsController@view')->name('permissions.view');	
	Route::get('permissions/add', 'PermissionsController@add')->name('permissions.add');
	Route::post('permissions/add', 'PermissionsController@store')->name('permissions.store');
		
	Route::any('permissions/edit/{rec_id}', 'PermissionsController@edit')->name('permissions.edit');	
	Route::get('permissions/delete/{rec_id}', 'PermissionsController@delete');

/* routes for Pinjambmns Controller */	
	Route::get('pinjambmns', 'PinjambmnsController@index')->name('pinjambmns.index');
	Route::get('pinjambmns/index', 'PinjambmnsController@index')->name('pinjambmns.index');
	Route::get('pinjambmns/index/{filter?}/{filtervalue?}', 'PinjambmnsController@index')->name('pinjambmns.index');	
	Route::get('pinjambmns/view/{rec_id}', 'PinjambmnsController@view')->name('pinjambmns.view');	
	Route::get('pinjambmns/add', 'PinjambmnsController@add')->name('pinjambmns.add');
	Route::post('pinjambmns/add', 'PinjambmnsController@store')->name('pinjambmns.store');
		
	Route::any('pinjambmns/edit/{rec_id}', 'PinjambmnsController@edit')->name('pinjambmns.edit');	
	Route::get('pinjambmns/delete/{rec_id}', 'PinjambmnsController@delete');	
	Route::get('pinjambmns/ajukan_pinjam_bmn', 'PinjambmnsController@ajukan_pinjam_bmn')->name('pinjambmns.ajukan_pinjam_bmn');
	Route::post('pinjambmns/ajukan_pinjam_bmn', 'PinjambmnsController@ajukan_pinjam_bmn_store')->name('pinjambmns.ajukan_pinjam_bmn_store');
		
	Route::any('pinjambmns/proses_pengambilan_bmn/{rec_id}', 'PinjambmnsController@proses_pengambilan_bmn')->name('pinjambmns.proses_pengambilan_bmn');	
	Route::get('pinjambmns/list_proses_pengambilan_bmn', 'PinjambmnsController@list_proses_pengambilan_bmn');
	Route::get('pinjambmns/list_proses_pengambilan_bmn/{filter?}/{filtervalue?}', 'PinjambmnsController@list_proses_pengambilan_bmn');

/* routes for Programs Controller */	
	Route::get('programs', 'ProgramsController@index')->name('programs.index');
	Route::get('programs/index', 'ProgramsController@index')->name('programs.index');
	Route::get('programs/index/{filter?}/{filtervalue?}', 'ProgramsController@index')->name('programs.index');	
	Route::get('programs/view/{rec_id}', 'ProgramsController@view')->name('programs.view');
	Route::get('programs/masterdetail/{rec_id}', 'ProgramsController@masterDetail')->name('programs.masterdetail');	
	Route::get('programs/add', 'ProgramsController@add')->name('programs.add');
	Route::post('programs/add', 'ProgramsController@store')->name('programs.store');
		
	Route::any('programs/edit/{rec_id}', 'ProgramsController@edit')->name('programs.edit');	
	Route::get('programs/delete/{rec_id}', 'ProgramsController@delete');

/* routes for Realisasis Controller */	
	Route::get('realisasis', 'RealisasisController@index')->name('realisasis.index');
	Route::get('realisasis/index', 'RealisasisController@index')->name('realisasis.index');
	Route::get('realisasis/index/{filter?}/{filtervalue?}', 'RealisasisController@index')->name('realisasis.index');	
	Route::get('realisasis/view/{rec_id}', 'RealisasisController@view')->name('realisasis.view');	
	Route::get('realisasis/add', 'RealisasisController@add')->name('realisasis.add');
	Route::post('realisasis/add', 'RealisasisController@store')->name('realisasis.store');
		
	Route::any('realisasis/edit/{rec_id}', 'RealisasisController@edit')->name('realisasis.edit');	
	Route::get('realisasis/delete/{rec_id}', 'RealisasisController@delete');

/* routes for Roles Controller */	
	Route::get('roles', 'RolesController@index')->name('roles.index');
	Route::get('roles/index', 'RolesController@index')->name('roles.index');
	Route::get('roles/index/{filter?}/{filtervalue?}', 'RolesController@index')->name('roles.index');	
	Route::get('roles/view/{rec_id}', 'RolesController@view')->name('roles.view');
	Route::get('roles/masterdetail/{rec_id}', 'RolesController@masterDetail')->name('roles.masterdetail');	
	Route::get('roles/add', 'RolesController@add')->name('roles.add');
	Route::post('roles/add', 'RolesController@store')->name('roles.store');
		
	Route::any('roles/edit/{rec_id}', 'RolesController@edit')->name('roles.edit');	
	Route::get('roles/delete/{rec_id}', 'RolesController@delete');

/* routes for Statusizinkepegawaians Controller */	
	Route::get('statusizinkepegawaians', 'StatusizinkepegawaiansController@index')->name('statusizinkepegawaians.index');
	Route::get('statusizinkepegawaians/index', 'StatusizinkepegawaiansController@index')->name('statusizinkepegawaians.index');
	Route::get('statusizinkepegawaians/index/{filter?}/{filtervalue?}', 'StatusizinkepegawaiansController@index')->name('statusizinkepegawaians.index');	
	Route::get('statusizinkepegawaians/view/{rec_id}', 'StatusizinkepegawaiansController@view')->name('statusizinkepegawaians.view');
	Route::get('statusizinkepegawaians/masterdetail/{rec_id}', 'StatusizinkepegawaiansController@masterDetail')->name('statusizinkepegawaians.masterdetail');	
	Route::get('statusizinkepegawaians/add', 'StatusizinkepegawaiansController@add')->name('statusizinkepegawaians.add');
	Route::post('statusizinkepegawaians/add', 'StatusizinkepegawaiansController@store')->name('statusizinkepegawaians.store');
		
	Route::any('statusizinkepegawaians/edit/{rec_id}', 'StatusizinkepegawaiansController@edit')->name('statusizinkepegawaians.edit');	
	Route::get('statusizinkepegawaians/delete/{rec_id}', 'StatusizinkepegawaiansController@delete');

/* routes for Statuspinjambmns Controller */	
	Route::get('statuspinjambmns', 'StatuspinjambmnsController@index')->name('statuspinjambmns.index');
	Route::get('statuspinjambmns/index', 'StatuspinjambmnsController@index')->name('statuspinjambmns.index');
	Route::get('statuspinjambmns/index/{filter?}/{filtervalue?}', 'StatuspinjambmnsController@index')->name('statuspinjambmns.index');	
	Route::get('statuspinjambmns/view/{rec_id}', 'StatuspinjambmnsController@view')->name('statuspinjambmns.view');
	Route::get('statuspinjambmns/masterdetail/{rec_id}', 'StatuspinjambmnsController@masterDetail')->name('statuspinjambmns.masterdetail');	
	Route::get('statuspinjambmns/add', 'StatuspinjambmnsController@add')->name('statuspinjambmns.add');
	Route::post('statuspinjambmns/add', 'StatuspinjambmnsController@store')->name('statuspinjambmns.store');
		
	Route::any('statuspinjambmns/edit/{rec_id}', 'StatuspinjambmnsController@edit')->name('statuspinjambmns.edit');	
	Route::get('statuspinjambmns/delete/{rec_id}', 'StatuspinjambmnsController@delete');

/* routes for Subkomponens Controller */	
	Route::get('subkomponens', 'SubkomponensController@index')->name('subkomponens.index');
	Route::get('subkomponens/index', 'SubkomponensController@index')->name('subkomponens.index');
	Route::get('subkomponens/index/{filter?}/{filtervalue?}', 'SubkomponensController@index')->name('subkomponens.index');	
	Route::get('subkomponens/view/{rec_id}', 'SubkomponensController@view')->name('subkomponens.view');
	Route::get('subkomponens/masterdetail/{rec_id}', 'SubkomponensController@masterDetail')->name('subkomponens.masterdetail');	
	Route::get('subkomponens/add', 'SubkomponensController@add')->name('subkomponens.add');
	Route::post('subkomponens/add', 'SubkomponensController@store')->name('subkomponens.store');
		
	Route::any('subkomponens/edit/{rec_id}', 'SubkomponensController@edit')->name('subkomponens.edit');	
	Route::get('subkomponens/delete/{rec_id}', 'SubkomponensController@delete');

/* routes for Suboutputs Controller */	
	Route::get('suboutputs', 'SuboutputsController@index')->name('suboutputs.index');
	Route::get('suboutputs/index', 'SuboutputsController@index')->name('suboutputs.index');
	Route::get('suboutputs/index/{filter?}/{filtervalue?}', 'SuboutputsController@index')->name('suboutputs.index');	
	Route::get('suboutputs/view/{rec_id}', 'SuboutputsController@view')->name('suboutputs.view');
	Route::get('suboutputs/masterdetail/{rec_id}', 'SuboutputsController@masterDetail')->name('suboutputs.masterdetail');	
	Route::get('suboutputs/add', 'SuboutputsController@add')->name('suboutputs.add');
	Route::post('suboutputs/add', 'SuboutputsController@store')->name('suboutputs.store');
		
	Route::any('suboutputs/edit/{rec_id}', 'SuboutputsController@edit')->name('suboutputs.edit');	
	Route::get('suboutputs/delete/{rec_id}', 'SuboutputsController@delete');

/* routes for Users Controller */	
	Route::get('users', 'UsersController@index')->name('users.index');
	Route::get('users/index', 'UsersController@index')->name('users.index');
	Route::get('users/index/{filter?}/{filtervalue?}', 'UsersController@index')->name('users.index');	
	Route::get('users/view/{rec_id}', 'UsersController@view')->name('users.view');
	Route::get('users/masterdetail/{rec_id}', 'UsersController@masterDetail')->name('users.masterdetail');	
	Route::any('account/edit', 'AccountController@edit')->name('account.edit');	
	Route::get('account', 'AccountController@index');	
	Route::post('account/changepassword', 'AccountController@changepassword')->name('account.changepassword');	
	Route::get('users/add', 'UsersController@add')->name('users.add');
	Route::post('users/add', 'UsersController@store')->name('users.store');
		
	Route::any('users/edit/{rec_id}', 'UsersController@edit')->name('users.edit');	
	Route::get('users/delete/{rec_id}', 'UsersController@delete');
});


	
Route::get('componentsdata/subkomponen_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->subkomponen_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/statusizinkepegawaian_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->statusizinkepegawaian_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/pegawai_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->pegawai_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/program_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->program_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/suboutput_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->suboutput_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/kegiatan_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->kegiatan_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/role_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->role_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/statuspinjambmn_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->statuspinjambmn_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/akun_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->akun_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/komponen_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->komponen_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/output_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->output_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/users_username_value_exist',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->users_username_value_exist($request);
	}
);
	
Route::get('componentsdata/users_email_value_exist',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->users_email_value_exist($request);
	}
);


Route::post('fileuploader/upload/{fieldname}', 'FileUploaderController@upload');
Route::post('fileuploader/s3upload/{fieldname}', 'FileUploaderController@s3upload');
Route::post('fileuploader/remove_temp_file', 'FileUploaderController@remove_temp_file');


/**
 * All static content routes
 */
Route::get('info/about',  function(){
		return view("pages.info.about");
	}
);
Route::get('info/faq',  function(){
		return view("pages.info.faq");
	}
);

Route::get('info/contact',  function(){
	return view("pages.info.contact");
}
);
Route::get('info/contactsent',  function(){
	return view("pages.info.contactsent");
}
);

Route::post('info/contact',  function(Request $request){
		$request->validate([
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required'
		]);

		$senderName = $request->name;
		$senderEmail = $request->email;
		$message = $request->message;

		$receiverEmail = config("mail.from.address");

		Mail::send(
			'pages.info.contactemail', [
				'name' => $senderName,
				'email' => $senderEmail,
				'comment' => $message
			],
			function ($mail) use ($senderEmail, $receiverEmail) {
				$mail->from($senderEmail);
				$mail->to($receiverEmail)
					->subject('Contact Form');
			}
		);
		return redirect("info/contactsent");
	}
);


Route::get('info/features',  function(){
		return view("pages.info.features");
	}
);
Route::get('info/privacypolicy',  function(){
		return view("pages.info.privacypolicy");
	}
);
Route::get('info/termsandconditions',  function(){
		return view("pages.info.termsandconditions");
	}
);

Route::get('info/changelocale/{locale}', function ($locale) {
	app()->setlocale($locale);
	session()->put('locale', $locale);
    return redirect()->back();
})->name('info.changelocale');