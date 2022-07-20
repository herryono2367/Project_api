<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table="Cars";
    protected $fillable=['id','merek','cc','mesin','bahan','muatan'];

    public function customer(){
        return $this->hasOne('app\Customer');
    }
    public function paket(){
        return $this->hasOne('app\Paket');
    }

}
