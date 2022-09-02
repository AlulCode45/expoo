<?php

namespace App\Http\Controllers;

use App\Models\SubjectsModel;
use App\Models\TaskModel;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $data = [];
        return view('teacher.add_tasks');
    }
    public function all_task()
    {
        return view('teacher.all_task');
    }
    public function view_task()
    {
        return view('teacher.view_task');
    }
    public function view_subjects()
    {
        $data = [
            'subjects' => SubjectsModel::all()
        ];
        return view('teacher.view_subjects', $data);
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
}
