<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

	protected $fillable=['civilité','prénom','nom','fonction','téléphone','date_naissance','email','société_id','ville'];

    public function société(){
    	return $this->belongsTo('App\Société');
    }
}
