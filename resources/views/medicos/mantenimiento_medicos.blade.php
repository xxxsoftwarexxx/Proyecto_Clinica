@extends('principal')

@section('Mantenimiento')
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading" style="height:60px;">
      <i class="fa fa-gear fa-fw"></i>
      <a1 class="titulo"><font size=5>Mantenimiento de Médicos</font><a1>
      <div class="pull-right">
        <div class="btn-group">
          <button type="button" class="btn btn-primary btn-md"
            onClick="location.href='/medicos/create'">NUEVO MÉDICO</button>
          <button type="button" class="btn btn-info btn-md"
            onClick="location.href='/medicos'">INDICE</button>
        </div>
      </div>
    </div>
    <div class="panel-body">
      <div>
        @yield('Contenido')
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
