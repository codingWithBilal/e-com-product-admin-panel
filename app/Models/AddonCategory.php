<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddonCategory extends Model
{
    use HasFactory, SoftDeletes;
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
   
    protected $casts = [
        'addons'=> 'json'
    ];

    protected $fillable = [
        'name',
        'addons'
    ];

    public function addonsData(){
        return $this->belongsToJson(Addon::class, 'addons');
    }
    public function productAddon(){
        return $this->hasManyJson(Product::class, 'addon_category');
    }
}
