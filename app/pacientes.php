<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pacientes extends Model
{
     protected $table = 'pacientes';
      public function users()
      {
        return $this->hasMany('App\User', 'dni', 'apellido','nombres','telefono','correo','direccion','estado','tipo_paciente','escuela_profecional','codiog'.'fecha_nacimiento','sexo');
      }
}
