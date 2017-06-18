<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    protected $primaryKey='id';
    protected $table ='article';
    protected $fillable = array('title','content','doctorid','status','image');
    
}
