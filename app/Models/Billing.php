<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected $table = 'billings';
    protected $primaryKey = 'id';
     protected $fillable = [
          'date',
          'total_amount',
          'payment_method',
          'payment_status',
          'service_type'
      ];
    use HasFactory;
}
