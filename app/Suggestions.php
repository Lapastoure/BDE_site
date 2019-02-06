<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestions extends Model
{
    public $timestamps = false;
    protected $table = 'suggestions';
    public $fillable = [
        'id','label', 'lescription', 'date', 'image_Url','id_users'];

      
}
