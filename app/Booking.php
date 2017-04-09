<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $fillable = [
        'start', 'end', 'remark', 'status_id', 'user_id', 'venue_id', 'session_id',
    ];

	// reverse relation allowing status,venue,user,session to be access from booking table

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function venue()
    {
        return $this->belongsTo('App\Venue');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function session()
    {
        return $this->belongsTo('App\Session');
    }
}
