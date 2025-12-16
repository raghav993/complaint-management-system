<?php

namespace App\Observers;

use App\Models\Token;
use App\Http\Controllers\AdvocateController;

class TokenObserver
{
    public function updated(Token $token)
    {
        if ($token->isDirty('status') && $token->status === 'completed') {
            $counter = $token->counter;
            if ($counter && $counter->advocate_id) {
                app(AdvocateController::class)->assignNextToken($counter->id);
            }
        }
    }

    /**
     * Handle the Token "deleted" event.
     */
    public function deleted(Token $token): void
    {
        //
    }

    /**
     * Handle the Token "restored" event.
     */
    public function restored(Token $token): void
    {
        //
    }

    /**
     * Handle the Token "force deleted" event.
     */
    public function forceDeleted(Token $token): void
    {
        //
    }
}
