@extends('layouts.app')

@section('header')
    <h1 class="text-3xl font-bold text-gray-800">Manage Students</h1>
@endsection

@section('content')
    <div class="container mx-auto px-4 py-6">
        <div class="flex justify-between items-center mb-4">
            <a href="{{ route('students.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700 transition">Add New Student</a>
            <form method="GET" action="{{ route('students.index') }}" class="flex">
                <input type="text" name="search" placeholder="Search..." class="border rounded-l-md px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300" value="{{ request('search') }}">
                <button type="submit" class="bg-blue-600 text-white rounded-r-md px-4 py-2 hover:bg-blue-700 transition">Search</button>
            </form>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 text-left">
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Class Teacher</th>
                        <th class="px-4 py-2">Class</th>
                        <th class="px-4 py-2">Admission Date</th>
                        <th class="px-4 py-2">Yearly Fees</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr class="hover:bg-gray-100 transition">
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $student->student_name }}</td>
                            <td class="border px-4 py-2">{{ $student->teacher->name }}</td>
                            <td class="border px-4 py-2">{{ $student->class }}</td>
                            <td class="border px-4 py-2">{{ $student->admission_date->format('d-m-Y') }}</td>
                            <td class="border px-4 py-2">{{ number_format($student->yearly_fees, 2) }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('students.edit', $student) }}" class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $students->links() }}
        </div>
    </div>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this student?");
        }
    </script>
@endsection
