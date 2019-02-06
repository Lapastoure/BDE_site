<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscribesmanifs extends Model{
    public $timestamps = false;
    protected $table = 'isersmanifestationsinscribe';
    public $fillable = [
        'id', 'id_manifestations', 'id_users'];



}