<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    public $timestamps = false;
    public $table = 'images';
    public $fillable = [
        'id','image_url', 'id_manifestations', 'id_users'];

       
       
        public function manifestation()
        {
            return $this->belongsTo(Manifestations::class);
        }


}
