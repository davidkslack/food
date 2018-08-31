<?php

namespace Database\Model\Food;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Order extends Model // implements AuthenticatableContract, AuthorizableContract
{
    // use Authenticatable, Authorizable;

    protected $primaryKey = 'order_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'total_cost', 'ordered_by', 'status',
    ];

    /**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'orders';
	public $timestamps = false;
}

