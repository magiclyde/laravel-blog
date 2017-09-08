<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (! $this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }
    }

    //public function setContentAttribute($value)
    //{
    //    $this->attributes['content'] = $value;
    //    if (! $this->exists) {
    //        $this->attributes['marked_html'] = markdown_parse($value);
    //    }
    //}
}
