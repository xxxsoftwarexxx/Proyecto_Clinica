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


Route::get('/', function () {
    return view('welcome');
});

Route::resource('home', 'PrincipalController');

Route::get('login', function () {
    return view('login');
});

Route::get('configuracion', function () {
    return view('configuracion');
});


Route::resource('personas', 'PersonasController');

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
Route::resource('reservas', 'ReservaController@mostrar');
Route::resource('reservas/horario', 'ReservaController@horario');
Route::resource('reservas/citas', 'ReservaController@citas');
Route::get('researches','InicioController@rese');
Route::get('event','InicioController@event');
Route::get('service','InicioController@service');
Route::get('contactos','InicioController@contactos');
Route::get('inicio','InicioController@inicio');
//Comentario
Route::get('Recuperar_Datos_Cita','ReservaController@Recuperar_Bloque');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('reservas_Almacenar','ReservaController@almacenar');


Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('index');
});
Route::get('rtabout', function () {
    return view('about');
});
Route::get('rtspec', function () {
    return view('codes');
});
Route::get('rtgallery', function () {
    return view('gallery');
});
Route::get('rtcontact', function () {
    return view('contact');
});
