<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Cargos;

class Usuarios extends Model
{

    use Notifiable;
protected $table = 'pss_usuarios';

    protected $fillable = [
        'pss_nome', 'pss_sobrenome', 'pss_matricula' , 'pss_cpf', 'pss_telefone' , 'pss_celular' , 'pss_email' , 'pss_usuario' , 'pss_habilitado' ,
    ];


     protected $hidden = [
        'pss_senha' ,
    ];


     protected $casts = [
    ];
    public static function cargos(){
        return hasOne(Cargos::class);
    }
}
