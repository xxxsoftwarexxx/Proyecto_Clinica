@extends('Especialidades.MantenimientoEspecialidades')

@section('Contenido')
<form method="POST" action="/especialidades/{{ $especialidades->codigo}}" autocomplete="off">
{{csrf_field()}}
{{method_field('PUT')}}
  <fieldset>
    <div class="text-center"><h2 align="center">MODIFICAR ESPECIALIDAD</h2>
    </div></br>
    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-h-square bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
          <input id="codigo" name="codigo" placeholder="Código de la Especialidad" class="form-control"  value="{{$especialidades->codigo}}" required disabled="true">
          <label>Código de Especialidad</label>
      </div>
    </div>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-list-alt bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <input id="nombre" name="nombre" pattern="[A-Z]{3,}"placeholder="Nombre de la Especialidad" class="form-control" value="{{$especialidades->nombre}}"required>
        <label>Nombre de Especialidad</label>
      </div>
    </div>

    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-bitbucket bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <select id="habilitado" name="habilitado" placeholder="Estado de Especialidad" class="form-control" >
          @if($especialidades->habilitado == "HABILITADO")
            <option selected value = "HABILITADO">HABILITADO</option>
            <option value="INHABILITADO">INHABILITADO</option>
          @else
            <option value="HABILITADO">HABILITADO</option>
            <option selected value = "INHABILITADO">INHABILITADO</option>
          @endif
        </select>
         <label>Estado de Especialidad</label>
      </div>
    </div>
    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa  fa-medkit bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <select id="consultorios_id" name="consultorios_id"  placeholder = "Código del Consultorio" class="form-control" required="">
          @foreach($consultorios as $consultorio)
            @if($consultorio->id == $especialidades->consultorios_id)
              <option selected >{{$especialidades->consultorios_id}}</option>
            @else
              <option>{{$consultorio->id}}</option>
            @endif
          @endforeach
        </select>
        <label>Código del Consultorio</label>
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
