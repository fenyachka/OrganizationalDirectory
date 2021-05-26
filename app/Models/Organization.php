<?php

namespace App\Models;

use App\Models\Individual;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name','address', 'activities'
    ];
    public function individuals(){
        return $this->belongsToMany(Individual::class)->withTimestamps();
    }
}
