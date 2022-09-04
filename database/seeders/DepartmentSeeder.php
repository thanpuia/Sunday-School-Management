<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'name' => 'Pre-Beginner'
            ],
            [
                'name' => 'Beginner'
            ],
            [
                'name' => 'Primary'
            ],
            [
                'name' => 'Junior'
            ],
            [
                'name' => 'Intermediate'
            ],
            [
                'name' => 'Sacrament'
            ],
            [
                'name' => 'Senior'
            ],
        ];

        foreach ($departments as $department){
            Department::create($department);
        }
    }
}
