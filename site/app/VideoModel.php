<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
	protected $primaryKey='id';
	protected $table ='video';
	protected $fillable = array('name','url','order','doctorid','corporationsid','status');

}
