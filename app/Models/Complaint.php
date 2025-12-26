<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use League\CommonMark\Extension\Table\TableSection;

class Complaint extends Model
{
    use HasFactory;

    protected $table = 'complaints';

    protected $primaryKey = 'complaint_no';
    
    public $timestamps = false;

    protected $fillable = [
        'complaint_no',
        'user_id',
        'section_id',
        'item_id',
        'engineer_id',
        'problem',
        'sr_no',
        'company',
        'model_no',
        'person_name',
        'priority',
        'status',
        'complaint_date',
        'completed_at',
    ];

    // users.sno → complaints.user_id

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'sno');
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function engineer()
    {
        return $this->belongsTo(Engineer::class);
    }

    public function assignments()
    {
        return $this->hasMany(ComplaintAssignment::class);
    }
}
