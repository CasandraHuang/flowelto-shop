<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bunga extends Model
{
    public $table = "bungas";
    protected $guarded = ['id'];

    public function pesanandetail(){
        return $this->hasMany('App\PesananDetail','id', 'id');
    }

    public function title(){
        return $this->hasMany('App\Title','id', 'id');
    }
}
