<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;
use App\Models\Purpose;
use App\Models\Token;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientController1 extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $tokens = Token::where('user_id',$user->id)
                        ->latest()
                        ->take(10)
                        ->get();

        return view('user.dashboard', compact('user','tokens'));
    }


    public function createTokenForm()
    {
        $counters = Counter::where('status','open')->get();
        $purposes = Purpose::all();

        return view('user.token-create', compact('counters','purposes'));
    }


    public function generateToken(Request $request)
    {
        $request->validate([
            'counter_id' => 'required|exists:counters,id',
            'purpose_id' => 'required|exists:purposes,id',
        ]);

        return DB::transaction(function() use ($request) {

            $token = Token::create([
                'user_id' => Auth::id(),
                'counter_id' => $request->counter_id,
                'purpose_id' => $request->purpose_id,
                'status' => 'pending'
            ]);

            $token->number = 10000 + $token->id;
            $token->save();

            return redirect()->route('user.dashboard')
                ->with('success',"Token #".$token->number." Generated Successfully");
        });
    }


    public function printToken($token)
    {
        $token = Token::with(['counter','purpose','user'])->findOrFail($token);

        if ($token->user_id !== Auth::id()) {
            abort(403);
        }

        return view('user.token-print', compact('token'));
    }
}
