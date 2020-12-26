<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
        protected $fillable = [
        'news_type'
    ];

    public function news()
    {
    	return $this->hasMany("App\News", "news_type_id");
    }
}
