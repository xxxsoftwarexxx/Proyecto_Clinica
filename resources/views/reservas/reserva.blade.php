@extends('principal')

@section('Mantenimiento')
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
              @yield('Titulo')
              <i class="fa fa-gear fa-fw"></i>
              <a1>Reservar Cita<a1>
        </div>
        <div class="panel-body">
            <div >
                @yield('Contenido')
                <form role="form" method="post" action="/reservas/horario">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                <fieldset>
                <div class="text-center"><h2 align="center">Seleccione la Especialidad</h2>
                </div></br>


                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                      <div class="col-md-3 col-xs-10">
                          <select id="Especialidad" name="Especialidad" placeholder="Especialidad" class="form-control">
                            @foreach($especialidades as $especialidad)
                                    <option value="{{$especialidad->codigo}} " name ="Especialidad">{{$especialidad->nombre}}</option>
                            @endforeach
                          </select>

                      

                </div></br></br>


                <div class="form-group">
                      <div class="col-md-12 text-center">
                          <input type="submit" style="width:80px" class="btn btn-success" align="center" class="form-control" value=" Continuar ">

                      </div>
                </div></br></br>

              </fieldset>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
  @yield('js')
@endsection

@section('js_scripts')
  @yield('js_scripts')
@endsection
