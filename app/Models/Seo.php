<?php

namespace App\Models;

use App\Models\Pivot\BlogSeo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Seo extends Model
{
    use HasFactory;

    protected $casts = [
        'keywords' => 'array'
    ];

    protected $fillable = ['schema', 'title', 'canonical', 'keywords', 'description', 'image', 'fb_image', 'twt_image', 'permalink', 'fb_title', 'fb_description', 'fb_type', 'fb_site_name', 'twt_title', 'twt_description', 'twt_site', 'twt_creator'];


    // Change Route Key "Default" to "permalink"
    public function getRouteKeyName(): string
    {
        return 'permalink';
    }

    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_seo');
    }

    public function setPermalinkAttribute($value)
    {
        if (static::wherePermalink($slug = Str::slug($value))->exists()) {

            $slug = $this->incrementPermalink($slug);
        }

        $this->attributes['permalink'] = $slug;
    }

    public function incrementPermalink($slug)
    {

        $original = $slug;

        $count = 2;

        while(static::wherePermalink($slug)->exists()) {

            $slug = "{$original}-".$count++;
        }

        return $slug;
    }
}
