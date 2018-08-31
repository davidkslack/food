<?php

namespace Database\Model\Food;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $primaryKey = 'food_id';

    /**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'food';
}