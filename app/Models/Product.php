<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory , SoftDeletes;

    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
    protected $casts = [
        'addon_category'=> 'json'
    ];

    protected $fillable = [
        'name',
        'price',
        'image',
        'addon_category'
    ];

    public function addonsCategoryData(){
        return $this->belongsToJson(AddonCategory::class, 'addon_category');
    }
    public function seo()
    {
        return $this->belongsToMany(Seo::class,'product_seo');
    }
}
