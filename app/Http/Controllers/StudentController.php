<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

use App\Interfaces\StudentRepositoryInterface;
use App\Models\Department;
use App\Models\Teacher;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    private StudentRepositoryInterface $studentRepository;
    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }


    public function index()
    {
        return response()->json([
            'data' => $this->studentRepository->getAllModels()
        ]);
    }

    public function create()
    {
        //
    }

 
    public function store(StoreStudentRequest $request)
    {
        return [
            'data'=> $this->studentRepository->createModel($request->all())
        ];
    }

 
    public function show(Student $student)
    {
        $department = Department::all();
        $teacher = Teacher::all();

        return [
            'data' => $this->studentRepository->getModelById($student->id),
            'department' => $department,
            'teacher' => $teacher
        ];
    }

 
    public function edit(Student $student)
    {
        //
    }

    
    public function update(UpdateStudentRequest $request, Student $student)
    {

        return [
            'data' => $this->studentRepository->updateModel($student->id, $request->all())
        ];
    }

  
    public function destroy(Student $student)
    {
        return $this->studentRepository->deleteModel($student->id);
    }

    public function showStudentByTeacher ($teacherId){
        Log::error("Request zzzz ");
        return [
            'data' => $this->studentRepository->showStudentByTeacher($teacherId)
        ];
    }
}
