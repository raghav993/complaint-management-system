<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintAssignment extends Model
{
    protected $fillable = [
        'complaint_id','engineer_id','assigned_by','note'
    ];

    public function complaint()
    {
        return $this->belongsTo(Complaint::class);
    }

    public function engineer()
    {
        return $this->belongsTo(Engineer::class);
    }

    public function assignedBy()
    {
        return $this->belongsTo(User::class,'assigned_by');
    }
}

