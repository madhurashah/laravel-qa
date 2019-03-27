<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillabel = ['title','body'];

    /**
     * Relationship with User model
     * (one question one usre)
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Set attribute
     */
    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
}
