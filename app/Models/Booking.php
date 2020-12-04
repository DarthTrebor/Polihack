<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = ['userId', 'scheduled'];

    public function getDoctor() {
        return $this->belongsTo(User::class, 'doctorId');
    }

    public function getUser() {
        return $this->belongsTo(User::class, 'userId');
    }
}
