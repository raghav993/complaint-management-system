<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Engineer extends Model
{
    protected $fillable = ['name','mobile','active', 'section'];

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    public function assignments()
    {
        return $this->hasMany(ComplaintAssignment::class);
    }
}
