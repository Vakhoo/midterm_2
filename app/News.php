<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'info', "img_name", "news_type_id"    
    ];

    public function comments()
    {
    	return $this->hasMany("App\Comments", "article_id");
    }


}
