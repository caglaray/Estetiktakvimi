<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorporationModel extends Model
{
  protected $table = 'corporations';

	protected $fillable = ['name','adress','logo','telephone','email','city','username','password',];


}


