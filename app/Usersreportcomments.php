<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usersreportcomments extends Model{
    public $timestamps = false;
    protected $table = 'userscommentsreport';
    public $fillable = [
        'id', 'id_comments', 'id_users'];



}