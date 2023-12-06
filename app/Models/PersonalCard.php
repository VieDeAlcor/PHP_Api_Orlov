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
                            'subdivision_id' ];

    public function Educations() {
        return $this->belongsTo(TypeEducation::class, "education_id", "id");
    }
    
    public function Positions() {
        return $this->belongsTo(Position::class, "positions_id", "id");
    }  

    public function Subdivisions() {
        return $this->belongsTo(Subdivision::class, "subdivision_id", "id");
    }  
}
