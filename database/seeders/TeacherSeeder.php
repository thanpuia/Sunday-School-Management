<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            [
                'name' => 'Zuala',
                'dob' => '25.11.1992',
                'phone' => '123465798',
                'bial' => '1',
                'section' => '2',
                'location' => 'Church St.',
                'department_id' =>1

            ],
            [
                'name' => 'Dengi',
                'dob' => '11.11.1992',
                'phone' => '1232215798',
                'bial' => '5',
                'section' => '2',
                'location' => 'Church St.',
                'department_id' =>1

            ],
            [
                'name' => 'Mustea',
                'dob' => '25.11.1992',
                'phone' => '123465798',
                'bial' => '1',
                'section' => '2',
                'location' => 'Church St.',
                'department_id' =>1

            ],
            [
                'name' => 'Ingli',
                'dob' => '25.11.1992',
                'phone' => '333465798',
                'bial' => '1',
                'section' => '2',
                'location' => 'Church St.',
                'department_id' =>2

            ],
        ];

        foreach ($teachers as $teacher){
            Teacher::create($teacher);
        }
    }
}
