<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;

use App\Interfaces\TeacherRepositoryInterface;


class TeacherController extends Controller
{

    private TeacherRepositoryInterface $teacherRepository;
    public function __construct(TeacherRepositoryInterface $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }


    public function index()
    {
        return response()->json([
            'data' => $this->teacherRepository->getAllModels()
        ]);
    }
 
    public function create()
    {
        //
    }

   
    public function store(StoreTeacherRequest $request)
    {
        return [
            'data'=> $this->teacherRepository->createModel($request->all())
        ];
    }

    public function show(Teacher $teacher)
    {
        return $this->teacherRepository->getModelById($teacher->id);
    }

    public function edit(Teacher $teacher)
    {
        //
    }

    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        return $this->teacherRepository->updateModel($teacher->id, $request->all());

    }

   
    public function destroy(Teacher $teacher)
    {
        return $this->teacherRepository->deleteModel($teacher->id);
    }

    public function showTeacherByDepartment ($departmentId){
        return response()->json([
            'data' => $this->teacherRepository->showTeacherByDepartment($departmentId)
        ]);
    }
}
