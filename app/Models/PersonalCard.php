<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalCard extends Model
{
    use HasFactory;

    protected $fillable = [ 'fio', 
                            'date_birth', 
                            'place_birth', 
                            'citizenship', 
                            'education_id', 
                            'position_id', 
                            'subdivision_id', 
                            'pass_serial',
                            'pass_num',
                            'pass_issued',
                            'pass_place',
                            'fact_place',
                            'date_reg',
                            'num_phone',
                            'date_dismiss',
                            'grounds_dismiss' ];

    public function Educations() {
        return $this->belongsTo(typeeducation::class, "education_id", "id");
    }
    
    public function Positions() {
        return $this->belongsTo(position::class, "positions_id", "id");
    }  

    public function Subdivisions() {
        return $this->belongsTo(subdivision::class, "subdivision_id", "id");
    }  
}
