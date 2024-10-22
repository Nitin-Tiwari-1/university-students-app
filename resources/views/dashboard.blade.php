@extends('layouts.app')

@section('header')
    <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-blue-100 p-4 rounded shadow">
                            <h3 class="text-lg font-bold">Total Students</h3>
                            <p>{{ $studentsCount }}</p>
                        </div>
                        <div class="bg-green-100 p-4 rounded shadow">
                            <h3 class="text-lg font-bold">Total Teachers</h3>
                            <p>{{ $teachersCount }}</p>
                        </div>
                        <div class="bg-yellow-100 p-4 rounded shadow">
                            <h3 class="text-lg font-bold">Total Fees</h3>
                            <p>${{ $totalFees }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    
@endsection
