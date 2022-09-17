<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Product extends Model
{
    use FilterQueryString;
    use HasFactory;

    protected $filters = ['category', 'between', 'greater',
        'greater_or_equal',
        'less',
        'less_or_equal',
        'not_between', ];

    protected $fillable = ['sku', 'name', 'category', 'price'];

    public $timestamps = false;
    // public function getSkuAttribute()
    // {
    //     return sprintf('%06d', $this->id);
    // }
    // other variant for sku attribute
}
