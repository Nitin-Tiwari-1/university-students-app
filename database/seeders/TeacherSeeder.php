<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $teachers = [
            ['name' => 'John Doe'],
            ['name' => 'Jane Smith'],
            ['name' => 'Alice Johnson'],
            ['name' => 'Michael Brown'],
            ['name' => 'Emily Davis'],
            ['name' => 'William Garcia'],
            ['name' => 'Sophia Martinez'],
            ['name' => 'James Wilson'],
            ['name' => 'Isabella Anderson'],
            ['name' => 'Benjamin Thomas'],
        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
