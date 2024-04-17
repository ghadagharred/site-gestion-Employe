<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable=['full_name','registration_number','departs','hire_date','address','phone','city'];
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
