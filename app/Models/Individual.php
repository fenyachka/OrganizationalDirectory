<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'personal_number',
        'birth_date',
        'city',
        'phone_number_1',
        'phone_number_2',
    ];
    public function organizations()
    {
        return $this->belongsToMany(Organization::class);
    }
}
