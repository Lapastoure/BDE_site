<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageLikes extends Model
{
    public $timestamps = false;
    protected $table = 'usersimageslike';
    protected $fillable = [
        'id', 'id_images', 'id_users'];

}
