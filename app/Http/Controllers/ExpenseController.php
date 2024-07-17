<?php
namespace App\Http\Controllers;
 
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class ExpenseController extends Controller{
        public function store(Request $request)     {
                $request->validate([
                'description' => 'required|string|max:255',
                'amount' => 'required|numeric',
                'date' => 'required|date',
                ]);
        
                Expense::create([
                'user_id' => Auth::id(),
                'description' => $request->description,
                'amount' => $request->amount,
                'date' => $request->date,
                ]);
 
        return redirect()->route('dashboard')->with('success', 'Despesa adicionada com sucesso!');
    }
}