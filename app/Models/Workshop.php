<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{
	protected $table = 'workshops';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

	public function event()
    {
        return $this->belongsTo(Event::class, 'id', 'event_id');
    }

}
