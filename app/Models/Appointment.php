<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $primaryKey = 'id';
     protected $fillable = [
          'diagnosis',
          'treatment',
          'medications',
          'date',
          'doctor',
          'status'
      ];
    use HasFactory;
}