<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model {
    // otherwise we error when trying to store/update a record
    public $timestamps = false;

	// what fields can we set in batch?
    protected $fillable = array('destination_system', 'destination_station', 'commodity', 'qty');

}
