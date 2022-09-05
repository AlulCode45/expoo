<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\StudentModel;
use App\Models\TaskModel;
use Illuminate\Http\Request;
use App\Models\SubjectsModel;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->StudentModel = new StudentModel();

        $this->middleware(function ($request, $next) {
            $this->user = auth()->guard('teacher')->user();
            return $next($request);
        });
    }
    /** Main page */
    public function index()
    {
        $data = [];
        return view('teacher.index');
    }

    /** Task Handler Controller */
    public function all_task()
    {
        return view('teacher.all_task');
    }
    public function view_task($id_task)
    {
        $data = [
            'students'  => $this->StudentModel->getStudentsByIdTeacher($this->user->id),
            'task' => TaskModel::find($id_task),
            'subject' => SubjectsModel::find(TaskModel::find($id_task)->subjects_id)
        ];
        return view('teacher.view_task', $data);
    }
    public function add_task($id_class)
    {
        return view('teacher.add_task');
    }
    public function postTask(Request $request)
    {
        $request->validate([
            'subject_id',
            'title' => 'required|max:30',
            'body',
            'due_date',
            'attachment',
        ], [
            'title.required' => 'Masukkan judul tugas !'
        ]);
        $save = [
            'subject_id' => $request->subject_id,
            'title' => $request->title,
            'body' => $request->body,
            'due_date' => $request->due_date,
            'attachment' => $request->attachment,
        ];
        if (TaskModel::create($save)) {
            return back()->with('success', 'Tugas telah ditambahkan !')->withInput();
        } else {
            return back()->with('error', 'Kesalahan, Silahkan coba lagi !');
        }
    }
    public function manage_tasks()
    {
        $data = [
            'tasks' => TaskModel::getTaskByTeacherId($this->user->id)
        ];
        return view('teacher.manage_tasks', $data);
    }

    /** Subject  Handler Controller */
    public function view_subjects()
    {
        $data = [
            'subjects' => SubjectsModel::all()
        ];
        return view('teacher.view_subjects', $data);
    }

    /** Students Handler  Controller */
    public function manage_students()
    {
        $data = [
            'students'  => $this->StudentModel->getStudentsByIdTeacher($this->user->id)
        ];
        return view('teacher.manage_students', $data);
    }

    /** Manage Class Handler Controller */
    public function manage_classes()
    {
        $data = [
            'subjects' => SubjectsModel::leftJoin('class', 'class.id', '=', 'subjects.class_id')->where('teacher_id', $this->user->id)->get()
        ];
        return view('teacher.manage_class', $data);
    }
    public function view_class($id_class)
    {
        $subject = SubjectsModel::where([
            'class_id'  => $id_class,
            'teacher_id' => $this->user->id
        ])->first();
        $data = [
            'subject' => $subject,
            'subjectName'   => $subject->subjects_name,
            'className' => ClassModel::find($id_class)->class_name,
            'listTasks' => TaskModel::where('subjects_id', $subject->id)->get(),
            'students'  => $this->StudentModel->getStudentsByIdTeacher($this->user->id),
        ];
        return view('teacher.view_class', $data);
    }
}
