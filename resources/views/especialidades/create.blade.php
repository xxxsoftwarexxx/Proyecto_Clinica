@extends('Especialidades.MantenimientoEspecialidades')

@section('estilos')
<style>
#codigo{
  text-transform: uppercase;
}
#nombre{
  text-transform: uppercase;
}
</style>
@endsection

@section('Contenido')
<form role="form" method="post" action="/especialidades">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <fieldset>
    <div class="text-center"><h2 align="center">NUEVA ESPECIALIDAD</h2>
    </div></br>
    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-h-square bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <input id="codigo" name="codigo"  pattern="[A-Z]{3}" placeholder="Código de la Especialidad" class="form-control" required>
        <label>Código de Especialidad</label>
      </div>
    </div>
    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-list-alt bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <input id="nombre" name="nombre" pattern="[A-Z]{3,}"placeholder="Nombre de la Especialidad" class="form-control" required>
        <label>Nombre de Especialidad</label>
      </div>
    </div>
    <div class="input-group col-md-12 col-xs-12">
      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-bitbucket bigicon"></i></span>
      <span align="center" class="col-md-6 col-xs-10 has-float-label">
      <div align="center" class="group-control">
        <select id="habilitado" name="habilitado" placeholder="Estado" class="form-control" >
          <option value = "HABILITADO">HABILITAR</option>
          <option value = "INHABILITADO">INHABILITAR</option>
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
            <option>{{$consultorio->id}}</option>
          @endforeach
        </select>
        <label>Código del Consultorio</label>
      </div>
      </div>
        <div class="form-group">
          <div class="col-md-12 text-center">
            <input type="submit" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Agregar">
            <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>
          </div>
        </div></br></br>
  </fieldset>
</form>

@endsection

@section('js')

@endsection

@section('js_scripts')

@endsection
