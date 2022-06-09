<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

	protected $fillable = ['parent_id', 'name'];

	public function parent()
	{
		return $this->hasOne('App\Models\MenuItem', 'id', 'parent_id')->orderBy('id');
	}

	public function children()
	{
		return $this->hasMany('App\Models\MenuItem', 'parent_id', 'id')->orderBy('id');
	}

	public static function menutree()
	{
		return static::with(implode('.', array_fill(0, 100, 'children')))->where('parent_id', '=', Null)->orderBy('id')->get();
	}

}
