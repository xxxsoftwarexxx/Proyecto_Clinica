@extends('Especialidades.MantenimientoEspecialidades')

@section('estilos')

@endsection

@section('Titulo')
    <i class="fa fa-gear fa-fw"></i>
    <a1>Agregar Especialidade<a1>
@endsection

@section('Contenido')

    <form role="form" method="post" action="/especialidades">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>
            <div class="text-center"><h2 align="center">Agregar Especialidade</h2>
            </div></br>

            <div class="input-group col-md-12 col-xs-12">
                            <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-h-square bigicon"></i></span>
                            <span align="center" class="col-md-6 col-xs-10 has-float-label">
                              <div align="center" class="group-control">
                                <input id="nombre" name="especialidades_codigo" placeholder="Código de la Especialidad" class="form-control" required>
                                <label>Código de la Especialidad</label>
                              </div>
                        </div>
            <div class="input-group col-md-12 col-xs-12">
                            <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-list-alt bigicon"></i></span>
                            <span align="center" class="col-md-6 col-xs-10 has-float-label">
                              <div align="center" class="group-control">
                                <input id="nombre" name="nombre" placeholder="Nombre de la Especialidad" class="form-control" required>
                                <label>Nombre de la Especialidad</label>
                              </div>
            </div>
            <div class="input-group col-md-12 col-xs-12">
               <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-bitbucket bigicon"></i></span>
               <span align="center" class="col-md-6 col-xs-10 has-float-label">
                 <div align="center" class="group-control">
                   <select id="Estado" name="estado" placeholder="Estado" class="form-control" >
                       <option>Habilitado</option>
                       <option>Deshabilitado</option>
                   </select>
                <label>Estado de la Especialidad</label>
                 </div>
           </div>
           <div class="input-group col-md-12 col-xs-12">
              <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa  fa-medkit bigicon"></i></span>
              <span align="center" class="col-md-6 col-xs-10 has-float-label">
                <div align="center" class="group-control">
                  <input id="codigo" name="codigo" placeholder="Código del Consultorio" class="form-control" required>
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
