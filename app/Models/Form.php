<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $guarded = [];

    public function getImagesAttribute($value)
    {
        $images = json_decode($value);
        $imagesUrl = [];

        foreach ($images as $image) {
            array_push($imagesUrl, asset('img/' . $image . '-resized.png'));
        }

        return $imagesUrl;
    }

    public function getYoutubeUrlAttribute($value)
    {
        if ($value != null) {
            $videoId = explode('?v=', $value)[1];

            return 'https://www.youtube.com/embed/' . $videoId . '?controls=0&disablekb=1&hl=id-id&loop=1&modestbranding=1&playlist=' . $videoId;
        } else {
            return null;
        }
    }

    public function getYoutubeVideoIdAttribute()
    {
        return explode('playlist=', $this->youtube_url)[1];
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Form', 'parent_id', 'id');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\Form', 'parent_id', 'id');
    }
}
