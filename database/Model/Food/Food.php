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

	/**
	 * Get the orders for the food.
	 */
	public function orders()
	{
		return $this->belongsToMany('\Database\Model\Food\Orders', 'food_order', 'food_id', 'order_id');
	}
}