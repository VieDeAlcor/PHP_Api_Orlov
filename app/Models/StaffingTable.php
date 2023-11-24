<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffingTable extends Model
{
    use HasFactory;

    protected $fillable = [ 'period',
                            'date_period'];
}
