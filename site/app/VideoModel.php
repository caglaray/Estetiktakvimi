<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
	protected $primaryKey='id';
	protected $table ='video';
	protected $fillable = ['name','url','order','doctorid','status'];

}
