@extends('escuelas_profesionales.mantenimiento_escuelas_profesionales')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de escuelas_profesionales<a1>
@endsection
@section('Contenido')
      <form role="form" method="post" action="/escuelas_profesionales" autocomplete="off">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>

            <div class="text-center"><h2 align="center">Agregar Escuela Profesional</h2>
            </div></br>

            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-mortar-board bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="id" name="id" placeholder="Código de Escuela Profesional" class="form-control" required>
                    <label>Código de Escuela Profesional</label>
                  </div>
            </div></br>

            <div class="input-group col-md-12 col-xs-12">
                <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-university bigicon"></i></span>
                <span align="center" class="col-md-6 col-xs-10 has-float-label">
                  <div align="center" class="group-control">
                    <input id="id" name="id" placeholder="Nombre de Escuela Profesional" class="form-control" required>
                    <label>Nombre de Escuela Profesional</label>
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
