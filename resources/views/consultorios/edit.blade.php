@extends('consultorios.MantenimientoConsultorios')

@section('Contenido')
<form method="POST" action="/consultorios/{{ $consultorios->id }}" autocomplete="off">
{{csrf_field()}}
{{method_field('PUT')}}
  <fieldset>
    <div class="text-center"><h2 align="center">MODIFICAR CONSULTORIO</h2>
    </div></br>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-plus-square bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <input id="codigo" name="id" placeholder="Código del Consultorio" class="form-control" value="{{$consultorios->id}}" required disabled="true">
        <label>Código del Consultorio</label>
      </div>
    </div>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-h-square bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <input id="nombre" name="ubicacion" placeholder="Ubicación del Consultorio" class="form-control" value="{{$consultorios->ubicacion}}" required>
        <label>Nombre del Consultorio</label>
      </div>
    </div></br>

    <div class="form-group">
      <div class="col-md-12 text-center">
        <a data-target="#confirmar-{{ $consultorios->id }}" data-toggle="modal" style="width:80px"
          class="btn btn-success" align="center" class="form-control" value="Guardar" >Guardar</a>
        <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>
      </div>
    </div></br></br>

    <div class="modal fade modal-slide-in-rigth" aria-hidden="true" role="dialog" tabindex="-1" id="confirmar-{{$consultorios->id}}">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-Label="Close">
              <span aria-hidden="true">X</span>
            </button>
            <h3 class="modal-title">Modificar Consultorio</h3>
          </div>
          <div class="modal-body">
            <p>¿Desea guardar los cambios efectuados en este consultorio?</p>
            <p>Codigo: {{$consultorios->id}}</p>
            <p>Nombre: {{$consultorios->ubicacion}}</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" style="width:80px" class="btn btn-success">Guardar</button>
          </div>
        </div>
      </div>
    </div>
  </fieldset>
</form>
@endsection
