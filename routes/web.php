<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
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

// Route::get('/', function () {

//       return view('welcome');
// });
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sistema', [App\Http\Controllers\HomeController::class, 'sistema'])->name('sistema');


Route::resource('Estudiante', App\Http\Controllers\StudentController::class);


Route::resource('Mis-certificados', App\Http\Controllers\CertificationStudentController::class);
Route::post('course_detail',[App\Http\Controllers\CourseController::class, 'course_detail']);
   Route::post('certification_detail',[App\Http\Controllers\CertificationController::class, 'certification_detail']);


Route::group(['middleware' => ['role:Estudiante|Docente|Coordinación']], function () {


Route::resource('Mi-examen', App\Http\Controllers\QualificationController::class);
Route::resource('Mis-cursos', App\Http\Controllers\StudentCourseController::class);


   Route::post('qualificationStore',[App\Http\Controllers\QualificationController::class, 'store']);
   Route::post('qualificationEdit',[App\Http\Controllers\QualificationController::class, 'edit']);
   Route::post('qualificationUpdate',[App\Http\Controllers\QualificationController::class, 'update']);
   Route::post('qualificationDestroy',[App\Http\Controllers\QualificationController::class, 'destroy']);
   Route::post('qualificationShow',[App\Http\Controllers\QualificationController::class, 'show']);
   
  Route::post('qualification_certification',[App\Http\Controllers\QualificationController::class, 'qualification_certification']);

   Route::resource("evaluaciones", App\Http\Controllers\EvaluationController::class);
   Route::post('evaluationStore',[App\Http\Controllers\EvaluationController::class, 'store']);
   Route::post('evaluationEdit',[App\Http\Controllers\EvaluationController::class, 'edit']);
   Route::post('evaluationUpdate',[App\Http\Controllers\EvaluationController::class, 'update']);
   Route::post('evaluationDestroy',[App\Http\Controllers\EvaluationController::class, 'destroy']);
   Route::post('evaluationShow',[App\Http\Controllers\EvaluationController::class, 'show']);

       Route::resource("examenes", App\Http\Controllers\ExamController::class);
   Route::post('examStore',[App\Http\Controllers\ExamController::class, 'store']);
   Route::post('examEdit',[App\Http\Controllers\ExamController::class, 'edit']);
   Route::post('examUpdate',[App\Http\Controllers\ExamController::class, 'update']);
   Route::post('examDestroy',[App\Http\Controllers\ExamController::class, 'destroy']);
   Route::post('examShow',[App\Http\Controllers\ExamController::class, 'show']);
});



   Route::resource("registros", App\Http\Controllers\RegistryController::class);
   Route::post('registryStore',[App\Http\Controllers\RegistryController::class, 'store']);
   Route::post('registryEdit',[App\Http\Controllers\RegistryController::class, 'edit']);
   Route::post('registryUpdate',[App\Http\Controllers\RegistryController::class, 'update']);
   Route::post('registryDestroy',[App\Http\Controllers\RegistryController::class, 'destroy']);
   Route::post('registryShow',[App\Http\Controllers\RegistryController::class, 'show']);




 Route::get('Docente', [App\Http\Controllers\HomeController::class, 'sistema'])->name('sistema');
Route::get('/Coordinación', [App\Http\Controllers\HomeController::class, 'sistema'])->name('sistema');
Route::get('/Administrador', [App\Http\Controllers\HomeController::class, 'sistema'])->name('sistema');
/////////////////////////////////////////
Route::group(['middleware' => ['role:Coordinación|Docente']], function () {



   Route::post('exam_detail',[App\Http\Controllers\ExamController::class, 'exam_detail']);

        //Route::resource("preguntas", App\Http\Controllers\QuestionController::class);





   Route::post('registry_detail',[App\Http\Controllers\RegistryDetailController::class, 'registry_detail']);

   Route::resource("registros_mantenimiento", App\Http\Controllers\RegistryDetailController::class);
   Route::post('registry_detailStore',[App\Http\Controllers\RegistryDetailController::class, 'store']);
   Route::post('registry_detailEdit',[App\Http\Controllers\RegistryDetailController::class, 'edit']);
   Route::post('registry_detailUpdate',[App\Http\Controllers\RegistryDetailController::class, 'update']);
   Route::post('registry_detailDestroy',[App\Http\Controllers\RegistryDetailController::class, 'destroy']);
   Route::post('registry_detailShow',[App\Http\Controllers\RegistryDetailController::class, 'show']);

   
   Route::resource("cursos", App\Http\Controllers\CourseController::class);
   Route::post('courseStore',[App\Http\Controllers\CourseController::class, 'store']);
   Route::post('courseEdit',[App\Http\Controllers\CourseController::class, 'edit']);
   Route::post('courseUpdate',[App\Http\Controllers\CourseController::class, 'update']);
   Route::post('courseDestroy',[App\Http\Controllers\CourseController::class, 'destroy']);
   Route::post('courseShow',[App\Http\Controllers\CourseController::class, 'show']);



   Route::post('certificationStore',[App\Http\Controllers\CertificationController::class, 'store']);
   Route::post('certificationEdit',[App\Http\Controllers\CertificationController::class, 'edit']);
   Route::post('certificationUpdate',[App\Http\Controllers\CertificationController::class, 'update']);
   Route::post('certificationDestroy',[App\Http\Controllers\CertificationController::class, 'destroy']);
   Route::post('certificationShow',[App\Http\Controllers\CertificationController::class, 'show']);






 
});



Route::group(['middleware' => ['role:Coordinación|Administrador|Estudiante']], function () {
    //
   Route::resource("categorias", App\Http\Controllers\CategoryController::class);
   Route::post('categoryStore',[App\Http\Controllers\CategoryController::class, 'store']);
   Route::post('categoryEdit',[App\Http\Controllers\CategoryController::class, 'edit']);
   Route::post('categoryUpdate',[App\Http\Controllers\CategoryController::class, 'update']);
   Route::post('categoryDestroy',[App\Http\Controllers\CategoryController::class, 'destroy']);
   Route::post('categoryShow',[App\Http\Controllers\CategoryController::class, 'show']);


   Route::post('category_productDestroy',"ProductController@category_productDestroy");
   Route::post('category_productStore',"ProductController@category_productStore");
   Route::post('category_productEdit',"ProductController@category_productEdit");





   Route::resource('usuarios', App\Http\Controllers\UserController::class);
   Route::post('userCreate', 'UserController@create');
   Route::post('userStore', [App\Http\Controllers\UserController::class, 'store']);
   Route::post('userDestroy',[App\Http\Controllers\UserController::class, 'destroy']);
   Route::post('userEdit', [App\Http\Controllers\UserController::class, 'edit']);
   Route::post('userUpdate', [App\Http\Controllers\UserController::class, 'update']);
   Route::post('userShow', [App\Http\Controllers\UserController::class, 'show']);
   Route::post('userUpdateProfile', [App\Http\Controllers\UserController::class, 'updateProfile']);

   Route::post('userRoleStore',[App\Http\Controllers\UserController::class, 'userRoleStore']);
   Route::post('userRoleEdit',[App\Http\Controllers\UserController::class, 'userRoleEdit']);
   Route::post('userRoleDestroy',[App\Http\Controllers\UserController::class, 'userRoleDestroy']);

   Route::resource("roles", App\Http\Controllers\RoleController::class);
   Route::post('roleStore',[App\Http\Controllers\RoleController::class, 'store']);
   Route::post('roleEdit',[App\Http\Controllers\RoleController::class, 'edit']);
   Route::post('roleUpdate',[App\Http\Controllers\RoleController::class, 'update']);
   Route::post('roleDestroy',[App\Http\Controllers\RoleController::class, 'destroy']);
   Route::post('roleShow',[App\Http\Controllers\RoleController::class, 'show']);

   Route::post('rolePermissionStore',[App\Http\Controllers\RolePermissionController::class,'store']);
   Route::post('rolePermissionEdit',[App\Http\Controllers\RolePermissionController::class,'edit']);
   Route::post('rolePermissionDestroy',[App\Http\Controllers\RolePermissionController::class,'destroy']);




  Route::resource("tipos", App\Http\Controllers\TypeController::class);
   Route::post('typeStore',[App\Http\Controllers\TypeController::class, 'store']);
   Route::post('typeEdit',[App\Http\Controllers\TypeController::class, 'edit']);
   Route::post('typeUpdate',[App\Http\Controllers\TypeController::class, 'update']);
   Route::post('typeDestroy',[App\Http\Controllers\TypeController::class, 'destroy']);
   Route::post('typeShow',[App\Http\Controllers\TypeController::class, 'show']);



   Route::resource("horarios", App\Http\Controllers\ScheduleController::class);
   Route::post('scheduleStore',[App\Http\Controllers\ScheduleController::class, 'store']);
   Route::post('scheduleEdit',[App\Http\Controllers\ScheduleController::class, 'edit']);
   Route::post('scheduleUpdate',[App\Http\Controllers\ScheduleController::class, 'update']);
   Route::post('scheduleDestroy',[App\Http\Controllers\ScheduleController::class, 'destroy']);
   Route::post('scheduleShow',[App\Http\Controllers\ScheduleController::class, 'show']);






   Route::resource("estudiantes", App\Http\Controllers\StudentController::class);
   Route::post('studentStore',[App\Http\Controllers\StudentController::class, 'store']);
   Route::post('studentEdit',[App\Http\Controllers\StudentController::class, 'edit']);
   Route::post('studentUpdate',[App\Http\Controllers\StudentController::class, 'update']);
   Route::post('studentDestroy',[App\Http\Controllers\StudentController::class, 'destroy']);
   Route::post('studentShow',[App\Http\Controllers\StudentController::class, 'show']);

// Route::get('qrcode', function () {
//      return QrCode::size(300)->generate('https://certificados.socialdata-peru.com/');
//  });

});


//// social media
   Route::post('socialMediaShare',[App\Http\Controllers\SocialMediaController::class, 'share']);

//


  Route::post('certificaciones/certificationSavePhoto',[App\Http\Controllers\CertificationController::class, 'savePhoto']);


    Route::get('certificaciones/{registry_detail_id}/{language}/{id}/{cert}',[App\Http\Controllers\CertificationController::class, 'report']);

   Route::post('certificationGenerate',[App\Http\Controllers\RegistryDetailController::class, 'certificationGenerate']);
    //  Route::post('certificationOpen',[App\Http\Controllers\RegistryDetailController::class, 'certificationGenerate']);
    //obtener registry_detail_id para poder generar el certificado despuees
         Route::resource("certificados_mantenimiento", App\Http\Controllers\CertificationController::class);
          Route::get('estudiante-certificados',[App\Http\Controllers\CertificationController::class, 'student']);
     
    

 Route::resource("certificados", App\Http\Controllers\CertificateController::class);


 Route::get('logout',[\App\Http\Controllers\Auth\LoginController::class, 'logout']);


Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
});
 
use App\Models\User;
Route::get('/auth/callback', function () {
   try {
            //create a user using socialite driver google
            $user = Socialite::driver('google')->user();
            // if the user exits, use that user and login
            $finduser = User::where('email', $user->email)->first();
            if($finduser){
                //if the user exists, login and show dashboard
                Auth::login($finduser);
                return redirect('/home');
            }else{
                //user is not yet created, so create first
                $newUser = User::create([
                    'names' => $user->name,
                     'firstname' => '',
                      'lastname' => '',
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('sdccertificados')
                ]);
                //every user needs a team for dashboard/jetstream to work.
                // //create a personal team for the user
                // $newTeam = Team::forceCreate([
                //     'user_id' => $newUser->id,
                //     'names' => explode(' ', $user->name, 2)[0]."'s Team",
                //     'personal_team' => true,
                // ]);
                // save the team and add the team to the user.
                // $newTeam->save();
                // $newUser->current_team_id = $newTeam->id;
                $newUser->save();
                //login as the new user
                Auth::login($newUser);
                $newUser->assignRole('Estudiante');
                // go to the dashboard
                return redirect('/home');
            }
            //catch exceptions
        } catch (Exception $e) {
            dd($e->getMessage());
        }

});

 Route::controller(App\Http\Controllers\UserController::class)->group(function(){
    Route::get('users', 'index');
    Route::get('users-export', 'export')->name('users.export');
    Route::post('users-import', 'import')->name('users.import');
});

//925680958 936158747