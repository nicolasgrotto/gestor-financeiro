<?php
 
namespace App\Http\Controllers;
 
use App\Models\Earning;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class HistoryController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::id();
        $month = $request->input('month');
        $year = $request->input('year');
 
        $queryEarnings = Earning::where('user_id', $userId);
        $queryExpenses = Expense::where('user_id', $userId);
 
        if ($month) {
            $queryEarnings->whereMonth('date', $month);
            $queryExpenses->whereMonth('date', $month);
        }
 
        if ($year) {
            $queryEarnings->whereYear('date', $year);
            $queryExpenses->whereYear('date', $year);
        }
 
        $earnings = $queryEarnings->orderBy('date', 'desc')->get();
        $expenses = $queryExpenses->orderBy('date', 'desc')->get();
 
        return view('history', [
            'earnings' => $earnings,
            'expenses' => $expenses,
            'selectedMonth' => $month,
            'selectedYear' => $year,
        ]);
    }
}