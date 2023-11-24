<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalOrder extends Model
{
    use HasFactory;

    protected $fillable = [ 'start_date', 
                            'end_late', 
                            'positions_id', 
                            'type_orders_id', 
                            'summary', 
                            'fio_id', 
                            'personnel_num', 
                            'base' ];
    
    public function Positions() {
        return $this->belongsTo(position::class, "positions_id", "id");
    }
    
    public function TypeOrder() {
        return $this->belongsTo(typeorder::class, "type_orders_id", "id");
    }  

    public function FIO() {
        return $this->belongsTo(personalcard::class, "fio_id", "id");
    }  
}
