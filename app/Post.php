<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $tableName = 'posts';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    public function user() {
      return $this->belongsTo('App\User');  //Each post belongs to a user
    }
}
