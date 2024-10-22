@extends('layouts.app')

@section('header')
    <h1 class="text-3xl font-bold">Create Student</h1>
@endsection

@section('content')

 <x-breadcrumb :breadcrumbs="[['title' => 'Students', 'url' => route('students.index')], ['title' => 'Create', 'url' => '#']]"/>
    
    <div class="container mx-auto px-4 py-6">
        <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-4">Add Student</h2>
            <form method="POST" action="{{ route('students.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="student_name" class="block text-sm font-medium text-gray-700">Student Name</label>
                    <input type="text" name="student_name" id="student_name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                </div>

                <div class="mb-4">
                    <label for="class_teacher_id" class="block text-sm font-medium text-gray-700">Class Teacher</label>
                    <select name="class_teacher_id" id="class_teacher_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                        <option value="" disabled selected>Select Class Teacher</option>
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="class" class="block text-sm font-medium text-gray-700">Class</label>
                    <input type="text" name="class" id="class" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                </div>

                <div class="mb-4">
                    <label for="admission_date" class="block text-sm font-medium text-gray-700">Admission Date</label>
                    <input type="date" name="admission_date" id="admission_date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                </div>

                <div class="mb-4">
                    <label for="yearly_fees" class="block text-sm font-medium text-gray-700">Yearly Fees</label>
                    <input type="number" name="yearly_fees" id="yearly_fees" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                </div>

                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">Add Student</button>
            </form>
        </div>
    </div>
@endsection
