<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name','company','model_no','serial_no','status'
    ];

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
