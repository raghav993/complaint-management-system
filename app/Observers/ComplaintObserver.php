<?php

namespace App\Observers;

use App\Models\Complaint;
use App\Http\Controllers\ComplaintController1;
use App\Models\Engineer;
use App\Models\User;

class ComplaintObserver
{
    public function updated(Complaint $complaint)
    {
        if ($complaint->isDirty('status') && $complaint->status === 'completed') {
            $engineer = $complaint->engineer;
            if ($engineer && $engineer->id) {
                app(Engineer::class)->assignNextComplaint($engineer->id);
            }
        }
    }

    /**
     * Handle the Complaint "deleted" event.
     */
    public function deleted(Complaint $complaint): void
    {
        //
    }

    /**
     * Handle the Complaint "restored" event.
     */
    public function restored(Complaint $complaint): void
    {
        //
    }

    /**
     * Handle the Complaint "force deleted" event.
     */
    public function forceDeleted(Complaint $complaint): void
    {
        //
    }
}
