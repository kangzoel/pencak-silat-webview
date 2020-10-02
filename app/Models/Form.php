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

    public function parent()
    {
        return $this->belongsTo('App\Models\Form', 'parent_id', 'id');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\Form', 'parent_id', 'id');
    }
}
