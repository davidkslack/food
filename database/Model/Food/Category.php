<?php

namespace Database\Model\Food;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'Category_id';

    /**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';
}