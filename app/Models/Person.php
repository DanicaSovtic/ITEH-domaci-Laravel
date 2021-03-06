<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'gender', 'nationality', 'city_id', 'citizenship_id'];
    protected $with = ['city', 'citizenship'];
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function citizenship()
    {
        return $this->belongsTo(Citizenship::class);
    }
}
