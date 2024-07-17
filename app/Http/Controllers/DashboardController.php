<?php

namespace App\Http\Controllers;

use App\Models\Earning;
use App\Models\Expense;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $totalGanhos = Earning::where('user_id', $userId)->sum('amount');
        $totalGastos = Expense::where('user_id', $userId)->sum('amount');
        $totalSobrando = $totalGanhos - $totalGastos;

        $earnings = Earning::where('user_id', $userId)->orderBy('date', 'desc')->get();
        $expenses = Expense::where('user_id', $userId)->orderBy('date', 'desc')->get();

        return view('dashboard', [
            'totalGanhos' => $totalGanhos,
            'totalGastos' => $totalGastos,
            'totalSobrando' => $totalSobrando,
            'earnings' => $earnings,
            'expenses' => $expenses,
        ]);
    }
}