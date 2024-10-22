<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {
        $studentsCount = Student::count();
        $teachersCount = Teacher::count();
        $totalFees = Student::sum('yearly_fees');

        $monthlyEnrollmentData = Student::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count');

        $monthlyFeeData = Student::selectRaw('MONTH(created_at) as month, SUM(yearly_fees) as total')
            ->groupBy('month')
            ->pluck('total');

        $monthlyEnrollmentData = Student::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count');


            // dd($monthlyEnrollmentData, $monthlyFeeData);
        return view('dashboard', compact('studentsCount', 'teachersCount', 'totalFees', 'monthlyEnrollmentData', 'monthlyFeeData'));
    }

}
