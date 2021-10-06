<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function product_group()
    {
        return $this->belongsTo(ProductGroup::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
