<?php

namespace Shirts4Mike;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sizes';

    /**
     * The products that belong that are available in a size.
     *
     */
    public function products()
    {
        return $this->belongsToMany(
                        'Shirts4Mike\Shirt',
                        'products_sizes',
                        'product_sku',
                        'size_id'
                    );
    }
}
