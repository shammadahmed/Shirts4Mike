<?php

namespace Shirts4Mike;

use Illuminate\Database\Eloquent\Model;

class Shirt extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

	 /**
     * The primary key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'sku';

    /**
     * Get the latest recent products.
     *
     * @param integer $amount The amount of products.
     */
    public function scopeRecent($query, $amount)
    {
    	return $query->take($amount)->latest('sku')->get();
    }

    /**
     * The available sizes of the shirt.
     *
     * @return [type] [description]
     */
    public function sizes()
    {
        return $this->belongsToMany(
                        'Shirts4Mike\Size',
                        'products_sizes',
                        'product_sku',
                        'size_id'                        
                    );
    }
}
