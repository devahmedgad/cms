<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Fields extends Model {

	protected $table = 'fields';
	protected $fillable = ['name', 'type', 'order', 'code','group_id','validiation','options'];








}
