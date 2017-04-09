<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{

	protected $fillable = [
        'name', 'location', 'status_id',
    ];

	// reverse relation allowing status to be access from venue table
	
    public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
