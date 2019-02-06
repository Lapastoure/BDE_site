<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersVote extends Model
{
    public $timestamps = false;
    protected $table = 'userssuggestionslike';

    public $fillable = [
        'id','id_suggestions', 'id_users'];

}
