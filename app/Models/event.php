<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table ='events';
	
	protected $fillable =[
	'event_name',
	'name',
	'filepath',
	'number',
	'event_link',
	'time',
	'summary',
	'hour',
	];
	
}