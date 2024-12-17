<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $salesData = Penjualan::selectRaw('DATE(tanggal) as date, SUM(total) as total')
            ->where('tanggal', '>=', Carbon::now()->subMonth())
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return view('dashboard', compact('salesData'));
    }
}
