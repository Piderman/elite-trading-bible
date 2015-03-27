<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model {

	// what fields can we set in batch?
    protected $fillable = array('destination_system', 'destination_station', 'commodity', 'qty');

}
