<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class issue extends Model
{
    protected $primarykey = 'issueId';

    protected $fillable = [
        'issuetitle', 'issueDescription', 'user',
    ];


    public function user(){
        return $this->belongsTo('App\User', 'userId', 'id');
      }


}
