<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'logo'
    ];

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }
}
