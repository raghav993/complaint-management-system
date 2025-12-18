<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class User extends Model
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
}
