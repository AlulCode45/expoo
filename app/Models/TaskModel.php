<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $guarded = ['id'];

    public static function getTaskByTeacherId($teacherId)
    {
        $tasks = SubjectsModel::leftJoin('tasks', 'tasks.subjects_id', '=', 'subjects.id')->leftJoin('class', 'class.id', '=', 'subjects.class_id')->where('teacher_id', $teacherId)->get();
        return $tasks;
    }
}
