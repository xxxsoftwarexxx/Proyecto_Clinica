<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['middleware' => 'MDadmi'], function () {
  Route::resource('personas', 'PersonasController');

  Route::resource('medhorarios', 'HorariosMedicosController');
  Route::resource('cambiar/{idbloque}/{medDNI}/', 'HorariosMedicosController@resaltar');

  Route::resource('medicos', 'MedicosController');
  Route::resource('consultorios', 'ConsultoriosController');
  Route::resource('especialidades','especialidadesController');
  Route::resource('historial_medico', 'HistorialMedicoController');
  Route::resource('historiales_medicos_detalles', 'HistorialesMedicosDetallesController');
  Route::resource('estudiantes','EstudiantesController');
  Route::resource('escuelas_profesionales','EscuelasProfesionalesController');

  Route::resource('citas', 'CitasController');
  Route::resource('sanciones', 'SancionesController');

  Route::resource('horarios','HorariosController');
  Route::resource('pacientes','PacientesController');
  Route::resource('p_horario','p_horarioController');
  Route::resource('telefono','TelefonoController');
  Route::resource('medhorarios', 'HorariosMedicosController');
  Route::resource('cambiar/{idbloque}/{medDNI}/', 'HorariosMedicosController@resaltar');

  });

Route::group(['middleware' => 'MDpaciente'], function () {

  Route::resource('reservas', 'ReservaController@mostrar');
  Route::resource('reservas/horario', 'ReservaController@horario');
  Route::resource('reservas/citas', 'ReservaController@citas');
  Route::get('reservas_Almacenar','ReservaController@almacenar');
  Route::get('Recuperar_Datos_Cita','ReservaController@Recuperar_Bloque');
  });

Route::get('Recuperar_Horario', ['uses'=>'ReservaController@Recuperar_Horario']);

Route::group(['middleware' => 'MDmedico'], function () {
});


Route::resource('medcitas','CitasMedicosController');
Route::get('/medcitas/{dniMed}/sancionar', ['uses' => 'CitasMedicosController@sancionar']);
Route::get('/medcitas/{dniMed}/enlistar', ['uses' => 'CitasMedicosController@enlistar']);


Route::get('/', 'InicioController@index');

Route::resource('inicio', 'InicioController');
Route::get('about', function () {
    return view('about');
});
Route::get('gallery', function () {
    return view('gallery');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('configuracion', function () {
    return view('configuracion');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
