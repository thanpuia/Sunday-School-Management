<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

use App\Interfaces\StudentRepositoryInterface;

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
        return $this->studentRepository->getModelById($student->id);
    }

 
    public function edit(Student $student)
    {
        //
    }

    
    public function update(UpdateStudentRequest $request, Student $student)
    {
        return $this->studentRepository->updateModel($student->id, $request->all());
    }

  
    public function destroy(Student $student)
    {
        return $this->studentRepository->deleteModel($student->id);
    }

    public function showStudentByTeacher ($teacherId){
        return $this->studentRepository->showStudentByTeacher($teacherId);
    }
}
