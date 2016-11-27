<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentDetails extends Model {
	
	protected $table = 'content_details';
	protected $fillable = ['content_id', 'key', 'value'];



}
