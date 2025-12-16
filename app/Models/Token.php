<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','counter_id','purpose_id','number','advocate_id','status','notes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function counter()
    {
        return $this->belongsTo(Counter::class);
    }

    public function purpose()
    {
        return $this->belongsTo(Purpose::class);
    }

    public function advocate()
    {
        return $this->belongsTo(User::class, 'advocate_id');
    }

    // helper to get display number, fallback to id-based number
    public function displayNumber()
    {
        return $this->number ?? (10000 + $this->id);
    }

    
}
