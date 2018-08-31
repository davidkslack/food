<?php

namespace database\Model\Food;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'user';
	public $timestamps = false;
}