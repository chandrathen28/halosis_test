<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
    	return $this->belongsTo('App\Model\Category');
    }
}
