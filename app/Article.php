<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	
	protected $fillable = ['title', 'body', 'user_id'];
	
	
	/**
	 * 
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */    
	public function writers()
	{
		return $this->belongsTo('App\User', 'user_id');
	}
	
	
	/**
	 * 
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function tags()
	{
		return $this->belongsToMany('App\Tag')->withTimestamps();
	}

    /**
     * @return array
     */
	public function getTagListAttributes()
    {
        return $this->tags->list('id');
    }
    
}
