<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model {

	protected $table = 'admins';
	protected $fillable = ['name', 'group_id'];

}
