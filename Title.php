<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{

    public $table = "titles";
    protected $guarded = ['id'];

    public function bunga(){
        return $this->belongsTo('App\Bunga','bunga_id', 'id');
    }
}
