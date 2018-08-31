<?php

namespace Database\Model\Food;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';
	public $timestamps = false;

    /**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'orders';

	/**
	 * Get the food for the order.
	 */
	public function food()
	{
		return $this->belongsToMany('\Database\Model\Food\Food', 'food_order', 'order_id', 'food_id');
	}
}

