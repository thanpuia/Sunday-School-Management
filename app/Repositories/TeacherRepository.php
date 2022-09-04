<?php

namespace App\Repositories;

use App\Interfaces\TeacherRepositoryInterface;
use App\Models\Teacher;

class TeacherRepository implements TeacherRepositoryInterface 
{
    public function getAllModels() 
    {
        return Teacher::all();
    }

    public function getModelById($TeacherId) 
    {
        return Teacher::findOrFail($TeacherId);
    }

    public function deleteModel($TeacherId) 
    {
        Teacher::destroy($TeacherId);
    }

    public function createModel(array $TeacherDetails) 
    {
        return Teacher::create($TeacherDetails);
    }

    public function updateModel($TeacherId, array $newDetails) 
    {
        return Teacher::whereId($TeacherId)->update($newDetails);
    }

    public function showTeacherByDepartment($departmentId)
    {
        return Teacher::where('department_id',$departmentId)->get();
    }

}
