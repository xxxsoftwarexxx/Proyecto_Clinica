@extends('Principal')

@section('estilos')

    <style type="text/css">
      td{
        background-color: #ffffff;
      }
      td:hover{
         background-color: #58A6F9;
         cursor: pointer;
      }
    </style>
@endsection

@section('Mantenimiento')
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">

              <i class="fa fa-gear fa-fw"></i>
              <a1>Seleccionar Horarios {{$especialidad}}<a1>
        </div>
        <div class="panel-body">
            <div >
                @yield('Contenido')
                <fieldset>
                  <input id="id" type="hidden" name="id" value="">

                  <div class="text-center"><h2 align="center">Escoger Horario</h2>
                  </div></br>
                </fieldset>
                <div class="dataTable_wrapper table-responsive">
                      <table class="table table-bordered table-condensed" >
                        <thead>
                            <tr >
                              <th><div class="panel panel-red"><div class="panel-heading"><h3>Hora</h3></div></div></th>
                              @for($i=0;$i<7;$i++)
                              <th>
                                  <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <h3 >{{$dias[$i]}}</h3>
                                  </div>
                                </div>
                              </th>
                              @endfor
                            </tr>
                        </thead>
                        <tbody>
                          @for($i=7;$i<19;$i++)
                            @if(($i<13)||($i>=15))
                            <tr>
                              <td align ="right" background-color="#be25b5">
                                      @if($i<9)
                                      0{{$i}}:00 - 0{{$i+1}}:00
                                      @elseif($i==9)
                                      0{{$i}}:00 - {{$i+1}}:00
                                      @else
                                      {{$i}}:00 - {{$i+1}}:00
                                      @endif
                              </td>
                                  @for($j=0;$j<7;$j++)
                                    @if($res[$j.'-'.$i]->estado==1)
                                      <td class="Hora_Cita" id="{{$j.'-'.$i}}" value="{{$res[$j.'-'.$i]->idbloques}}" onclick="document.location='/cambiar/{{$res[$j.'-'.$i]->idbloques}}/{{$dni}}'"><FONT COLOR="1EEC2F">disponible</td>
                                    @else
                                      @if($res[$j.'-'.$i]->dnimed==$dni)
                                        <td class="Hora_Cita" id="{{$j.'-'.$i}}" value="{{$res[$j.'-'.$i]->idbloques}}" onclick="document.location='/cambiar/{{$res[$j.'-'.$i]->idbloques}}/{{$dni}}'"><FONT COLOR="0000FF">Ocupado</td>
                                      @else
                                        <td class="Hora_Cita" id="{{$j.'-'.$i}}" value="{{$res[$j.'-'.$i]->idbloques}}"><FONT COLOR="FA0A0E">no disponible</td>
                                      @ENDIF
                                    @ENDIF
                                  @endfor
                              @elseif(($i==13))
                              <td colspan="8" height="25px"></td>
                              @endif
                          </tr>
                          @endfor
                        </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
  @yield('js')
@endsection

@section('js_scripts')

@endsection
