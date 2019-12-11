<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perguntas extends Model
{
   	protected $table='pss_perguntas';
    protected $fillable = [
        'pergunta',
    ];
	
	public function categoria(){
		
		return $this->belongsTo(Categoria::class);
	}
}
