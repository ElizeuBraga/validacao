<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function setNameAttribute($value)
		{
    		$this->attributes['email'] = strtolower($value);
		}
}
