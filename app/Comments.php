<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model{

public $timestamps = false;
    protected $table = 'comments';
    protected $fillable = [
        'id', 'description' , 'id_users','id_images'];

    }