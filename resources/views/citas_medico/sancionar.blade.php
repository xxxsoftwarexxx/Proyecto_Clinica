@extends('principal')

@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Sancionar<a1>
@endsection
@section('Mantenimiento')
        <form method="POST" action="/medcitas/{{ $tablas->id }}/sancionar/edit" autocomplete="off">
          {{csrf_field()}}
          {{method_field('PUT')}}

            <fieldset>

              <div class="text-center"><h2 align="center">Crear sanciones</h2>
              </div></br>
              <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <input id="id" name="id" placeholder="ID" class="form-control" value="{{$tablas->id}}" required disabled="true">
                    </div>
              </div></br></br>
              <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <input id="Duracion" name="Duracion" placeholder="Duracion" class="form-control"  required>
                    </div>
              </div></br></br>
              <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <input id="Descripcion" name="Descripcion" placeholder="Descripcion" class="form-control"  required>
                    </div>
              </div></br></br>
              <div class="form-group">
                    <div class="col-md-12 text-center">
                        <input type="submit" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Guardar">
                        <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>

                    </div>
              </div></br></br>
            </div>

            </fieldset>


       </form>
@endsection
@section('js_scripts')



@endsection
