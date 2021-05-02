<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExamRequest;
use App\Models\Exam;
use App\Models\ExamType;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ExamController extends Controller
{

    public function index () {
        $records = Exam::getAll(Auth::id());

        return view('admin.exams.index', compact('records'));
    }

    public function create () {
        $output['subjects'] = Subject::getAll();
        $output['types'] = ExamType::getAll();
        return view('admin.exams.create', $output);
    }


    public function store (ExamRequest $request) {
        $result = Exam::addUpdate($request, Auth::id());
        if ($result) {
            Session::flash('msg', 'success|Exam created successfully.');
        } else {
            Session::flash('msg', 'error|Couldn\'t create Exam.');
        }

        return redirect()->route('admin.exams.show', $result->id);
    }


    public function show ($id) {
        $output['exam'] = Exam::getWith($id);

        return view('admin.exams.show', $output);
    }


    public function edit (Exam $exam) {
        $output['subjects'] = Subject::getAll();
        $output['types'] = ExamType::getAll();
        $output['exam'] = $exam;

        return view('admin.exams.edit', $output);
    }


    public function update (ExamRequest $request, $id) {
        $result = Exam::addUpdate($request, Auth::id(), $id);
        if ($result) {
            Session::flash('msg', 'success|Exam updated successfully.');
        } else {
            Session::flash('msg', 'error|Couldn\'t update Exam.');
        }

        return redirect()->route('admin.exams.show', $id);
    }

    public function destroy (Exam $exam) {
        Question::where('exam_id', $exam->id)->delete();
        $exam->delete();
        Session::flash('msg', 'success|Exam deleted successfully.');
        return redirect()->route('admin.exams.index');
    }


}
