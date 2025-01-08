<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        
        'flight_number',
        'airline_id',
    ];

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function segments()
    {
        return $this->hasMany(FlightSegment::class);
    }
    
    public function classes()
    {
        return $this->hasMany(FlightClas::class);
    }
    public function seats()
    {
        return $this->hasMany(FlightSeat::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

}
