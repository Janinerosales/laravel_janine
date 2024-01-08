<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $primaryKey = 'id';
     protected $fillable = [
          'name',
          'address',
          'phone',
          'gender',
          'birthdate'
      ];
    use HasFactory;
}
