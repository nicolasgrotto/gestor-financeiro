<?php
namespace App\Http\Controllers;
 
use App\Models\Earning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class EarningController extends Controller
{
        public function store(Request $request)     
        {
                $request->validate([
                'description' => 'required|string|max:255',
                'amount' => 'required|numeric',
                'date' => 'required|date',
                ]);
        
                Earning::create([
                'user_id' => Auth::id(),
                'description' => $request->description,
                'amount' => $request->amount,
                'date' => $request->date,
                ]);
 
        return redirect()->route('dashboard')->with('success', 'Ganho adicionado com sucesso!');
    }
}