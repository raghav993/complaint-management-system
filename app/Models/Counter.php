<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Counter extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'advocate_id', 'status'];

    public function advocate()
    {
        return $this->belongsTo(User::class, 'advocate_id');
    }

    public function tokens()
    {
        return $this->hasMany(Token::class);
    }

    public function currentToken()
    {
        return $this->hasOne(Token::class)->whereIn('status', ['assigned', 'working']);
    }
    public function advocates()
    {
        return $this->belongsToMany(\App\Models\User::class, 'counter_user')->where('role', 'advocate');
    }
    
}
