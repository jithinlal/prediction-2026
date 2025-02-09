<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	protected $fillable = [
		'name',
		'group_id',
		'continent',
		'image',
		'rank',
		'world_cups',
		'manager_name'
	];

}
