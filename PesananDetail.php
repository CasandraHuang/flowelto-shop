<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function bunga(){
        return $this->belongsTo('App\Bunga','bunga_id', 'id');
    }

    public function pesanan(){
        return $this->belongsTo('App\Pesanan','pesanan_id', 'id');
    }
}
