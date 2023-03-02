<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Addon extends Model
{
    use HasFactory, SoftDeletes;
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

    protected $fillable = [
        'name',
        'price'
    ];

    public function addonCategory(){
        return $this->hasManyJson(AddonCategory::class, 'addons');
    }
}
