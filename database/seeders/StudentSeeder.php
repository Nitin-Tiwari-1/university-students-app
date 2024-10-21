<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        Student::create([
            'student_name' => 'Alice Johnson',
            'class_teacher_id' => 1, // Ensure this ID exists in the Teacher table
            'class' => 'Math',
            'admission_date' => now(),
            'yearly_fees' => 10000,
        ]);

        Student::create([
            'student_name' => 'Bob Miller',
            'class_teacher_id' => 2, // Ensure this ID exists in the Teacher table
            'class' => 'Science',
            'admission_date' => now(),
            'yearly_fees' => 12000,
        ]);
    }
}
