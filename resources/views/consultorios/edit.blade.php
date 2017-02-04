@extends('consultorios.MantenimientoConsultorios')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de consultorios<a1>

@endsection


@section('Contenido')


        <form method="POST" action="/consultorios/{{ $consultorios->id }}" autocomplete="off">

          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

            <div class="text-center"><h2 align="center">Modificar consultorio</h2>
            </div></br>

            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-plus-square bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Dni" name="id" placeholder="Código del Consultorio" class="form-control" value="{{$consultorios->id}}" required disabled="true">
                    <label>Código del Consultorio</label>
                  </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-h-square bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="Password" name="ubicacion" placeholder="Ubicación del Consultorio" class="form-control" value="{{$consultorios->ubicacion}}" required>
                    <label>Nombre del Consultorio</label>
                  </div>
            </div></br>
            
                <div class="form-group">
                  <div class="col-md-12 text-center">
                      <input type="submit" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Guardar">
                      <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>

                  </div>
            </div></br></br>


            </fieldset>


       </form>
@endsection
