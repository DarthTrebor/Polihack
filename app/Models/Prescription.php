<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $table = 'prescriptions';

    public function getMedic() {
        return $this->belongsTo(User::class, 'medicId');
    }

    public function getPacient() {
        return $this->belongsTo(User::class, 'pacientId');
    }
}
