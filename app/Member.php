<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $fillable = ['username', 'position', 'group_id', 'image', 'joined'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
