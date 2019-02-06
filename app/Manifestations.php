<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifestations extends Model
{
    protected $table = 'manifestations';
    public $fillable = [
        'id', 'label' ,'price' ,'description', 'date','image_url', 'id_periodicity', 'id_users', 'id_locations'];

   /* public function image()
    {
        return $this->hasMany(Images::class);
    }*/
}
