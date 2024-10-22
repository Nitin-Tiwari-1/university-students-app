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
            'class_teacher_id' => 1, 
            'class' => 'Math',
            'admission_date' => now(),
            'yearly_fees' => 10000,
        ]);

        Student::create([
            'student_name' => 'Bob Miller',
            'class_teacher_id' => 2, 
            'class' => 'Science',
            'admission_date' => now(),
            'yearly_fees' => 12000,
        ]);

        Student::create([
            'student_name' => 'Alice Johnson',
            'class_teacher_id' => 1, 
            'class' => 'Math',
            'admission_date' => now(),
            'yearly_fees' => 10000,
        ]);
        
        Student::create([
            'student_name' => 'Bob Miller',
            'class_teacher_id' => 2, 
            'class' => 'Science',
            'admission_date' => now(),
            'yearly_fees' => 12000,
        ]);
        
        Student::create([
            'student_name' => 'Charlie Brown',
            'class_teacher_id' => 1,
            'class' => 'Math',
            'admission_date' => now(),
            'yearly_fees' => 15000,
        ]);
        
        Student::create([
            'student_name' => 'David Smith',
            'class_teacher_id' => 3,
            'class' => 'History',
            'admission_date' => now(),
            'yearly_fees' => 13000,
        ]);
        
        Student::create([
            'student_name' => 'Emma Johnson',
            'class_teacher_id' => 2,
            'class' => 'Science',
            'admission_date' => now(),
            'yearly_fees' => 14000,
        ]);
        
        Student::create([
            'student_name' => 'Frank Harris',
            'class_teacher_id' => 1,
            'class' => 'Math',
            'admission_date' => now(),
            'yearly_fees' => 16000,
        ]);
        
        Student::create([
            'student_name' => 'Grace Lee',
            'class_teacher_id' => 4, 
            'class' => 'English',
            'admission_date' => now(),
            'yearly_fees' => 17000,
        ]);
        
        Student::create([
            'student_name' => 'Henry Davis',
            'class_teacher_id' => 3,
            'class' => 'History',
            'admission_date' => now(),
            'yearly_fees' => 18000,
        ]);
        
        Student::create([
            'student_name' => 'Isabella Martinez',
            'class_teacher_id' => 4,
            'class' => 'English',
            'admission_date' => now(),
            'yearly_fees' => 19000,
        ]);
        
        Student::create([
            'student_name' => 'Jack Wilson',
            'class_teacher_id' => 1,
            'class' => 'Math',
            'admission_date' => now(),
            'yearly_fees' => 20000,
        ]);
        

    }
}
