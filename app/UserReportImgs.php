<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReportImgs extends Model{


    public $timestamps = false;
    public $table = 'usersimagesreport';
    public $fillable = [
        'id','id_users','id_images'];

    
}
