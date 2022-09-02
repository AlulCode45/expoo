<?php

namespace App\Http\Controllers;

use App\Models\AnswerModel;
use Carbon\Carbon;
use App\Models\TaskModel;
use App\Models\TeacherModel;
use Illuminate\Http\Request;
use App\Models\SubjectsModel;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->user = Auth::guard('student');
    }
    public function index()
    {
        $data = [
            'subjects' => SubjectsModel::where('class_id', Auth::guard('student')->user()->class_id)->get(),
            'teacherModel' => new TeacherModel(),
        ];
        return view('students.index', $data);
    }
    public function all_task()
    {
        $idSubjects = SubjectsModel::select(['class_id', 'id'])->where('class_id', Auth::guard('student')->user()->class_id)->get();
        foreach ($idSubjects as $idSubject) {
            $data = [
                'taskToday' => TaskModel::where('subjects_id', $idSubject->id)->whereDate('due_date', Carbon::today())->get(),
                'taskWeeks' => TaskModel::where('subjects_id', $idSubject->id)->whereBetween('due_date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get(),
                'taskMonths' => TaskModel::where('subjects_id', $idSubject->id)->whereBetween('due_date', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->get(),
                'taskWithoutDueDate' => TaskModel::where('subjects_id', $idSubject->id)->where('due_date', null)->get(),
            ];
        }
        return view('students.all_task', $data);
    }
    public function view_task()
    {
        return view('students.view_task');
    }
    public function view_class($id_class)
    {
        $data = [
            'listTasks' => TaskModel::where('subjects_id', $id_class)->get()
        ];
        return view('students.view_class', $data);
    }

    public function postAnswer(Request $request)
    {
        $request->validate([
            'student_id',
            'task_id',
            'body' => 'required',
            'attachment',
        ], [
            'body.required' => 'Masukkan jawaban anda !'
        ]);

        $save = [
            'student_id' => $request->student_id,
            'task_id' => $request->task_id,
            'body' => $request->body,
            'attachment' => $request->attachment,
        ];
        if (AnswerModel::create($save)) {
            return back()->with('success', 'Jawaban terkirim !')->withInput();
        } else {
            return back()->with('error', 'Kesalahan, Silahkan coba lagi !');
        }
    }
}
