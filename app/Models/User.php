<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $primaryKey = 'sno';

    public $timestamps = false;

    protected $fillable = [
        'sno',
        'branch',
        'UserID',
        'Username',
        'name',
        'from_date',
        'to_date',
        'display',
        'date_of_entry',
        'Emp_id',
        'service',
        'flag_avi',
        'remark',
        'remark2'
    ];

    public function complaints()
    {
        return $this->hasMany(Complaint::class, 'user_id', 'sno');
    }

    public function getAuthIdentifierName()
    {
        return 'sno';
    }
}
