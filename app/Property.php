<?php

namespace App;
use App\Photo;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function user(){

        return $this->belongsTo(User::class);
    }


  public function photos()
    {
        return $this->hasMany(Photo::class);
      }

}
