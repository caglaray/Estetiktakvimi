<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionModel extends Model
{

    protected $primaryKey='id';
    protected $table ='question';
    protected $fillable = array('userid','doctorid','catid','title','message','status');

}
