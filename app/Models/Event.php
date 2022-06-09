<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

	protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

	/**
     * Get the workshops for the events.
     */
    public function workshops()
    {
        //return $this->hasMany(Workshop::class);
		return $this->hasMany(Workshop::class);
    }
	

}
