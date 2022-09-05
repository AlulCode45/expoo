<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class StudentModel extends Authenticatable
{
    protected $table = 'students';
    protected $guarded = ['id'];

    public function getStudentsByIdTeacher($idTeacher)
    {
        $getIdClass = SubjectsModel::select('class_id')->where('teacher_id', $idTeacher)->get();

        $data = [];
        foreach ($getIdClass as $idClass) {
            $dataResult = $this->where('class_id', $idClass->class_id)->get();
            array_push($data, $dataResult);
        }
        return $data[0];
    }
    public static function getClassByIdStudent($idStudent)
    {
        $studentClass = ClassModel::find($idStudent)->first();
        return $studentClass->class_name;
    }
}
