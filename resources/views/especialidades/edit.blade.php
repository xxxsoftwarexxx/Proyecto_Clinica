@extends('Especialidades.MantenimientoEspecialidades')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Especialidades<a1>
@endsection
@section('Contenido')
        <form method="POST" action="/especialidades/{{ $especialidades->codigo}}" autocomplete="off">
          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar Especialidades</h2>
            </div></br>


            <div class="input-group col-md-12 col-xs-12">
                            <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-h-square bigicon"></i></span>
                            <span align="center" class="col-md-6 col-xs-10 has-float-label">
                              <div align="center" class="group-control">
                                <input id="codigo" name="codigo" placeholder="Código de la Especialidad" class="form-control"  value="{{$especialidades->codigo}}" required disabled="true">
                                <label>Código de la Especialidad</label>
                              </div>
                        </div>

            <div class="input-group col-md-12 col-xs-12">
                            <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-list-alt bigicon"></i></span>
                            <span align="center" class="col-md-6 col-xs-10 has-float-label">
                              <div align="center" class="group-control">
                                <input id="nombre" name="nombre" placeholder="Nombre de la Especialidad" class="form-control" value="{{$especialidades->nombre}}"required>
                                <label>Nombre de la Especialidad</label>
                              </div>
            </div>

            <div class="input-group col-md-12 col-xs-12">
               <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-bitbucket bigicon"></i></span>
               <span align="center" class="col-md-6 col-xs-10 has-float-label">
                 <div align="center" class="group-control">
                   <input id="nombre" name="habilitado" placeholder="Estado de la Especialidad" class="form-control" value="{{$especialidades->habilitado}}" required>
                   <label>Estado de la Especialidad</label>
                 </div>
           </div>

            <div class="form-group">
                  <div class="col-md-12 text-center">
                      <input type="submit" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Guardar">
                      <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>

                  </div>
            </div></br></br>


            </fieldset>


       </form>
@endsection
