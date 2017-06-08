<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorModel extends Model
{
	protected $table = 'doctors';

	protected $fillable = ['name','surname','username','password','email','adress','photourl','telephone','birthday','livecity'];


	public function Article(){
		return $this->hasOne('App\Article','doctorid');
	}
	
	public function Video(){
		return $this->hasOne('App\Video','doctorid');
	}
	

}
