<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExamTypeRequest;
use App\Models\ExamType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ExamTypeController extends Controller
{

    public function index () {
        $records = ExamType::getAll();
        return view('admin.exam-types', compact('records'));
    }

    public function store (ExamTypeRequest $request) {
        $result = ExamType::addUpdate($request->all(), Auth::id());
        if ($result) {
            Session::flash('msg', 'success|Exam Type created successfully.');
        } else {
            Session::flash('msg', 'error|Couldn\'t create Exam Type.');
        }

        return redirect()->route('admin.exam-types.index');
    }


    public function update (ExamTypeRequest $request, $id) {
        $result = ExamType::addUpdate($request->all(), Auth::id(), $id);

        if ($result) {
            Session::flash('msg', 'success|Exam Type updated successfully.');
        } else {
            Session::flash('msg', 'error|Couldn\'t update Exam Type.');
        }
        return redirect()->route('admin.exam-types.index');
    }


    public function destroy (ExamType $examType) {
        $examType->delete();
        Session::flash('msg', 'success|Exam Type deleted successfully.');

        return redirect()->route('admin.exam-types.index');
    }


}
