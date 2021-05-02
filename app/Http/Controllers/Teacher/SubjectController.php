<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubjectRequest;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SubjectController extends Controller
{

    public function index () {
        $records = Subject::getAll();
        return view('teacher.subjects', compact('records'));
    }

    public function store (SubjectRequest $request) {
        $result = Subject::addUpdate($request->all(), Auth::id());
        if ($result) {
            Session::flash('msg', 'success|Subject created successfully.');
        } else {
            Session::flash('msg', 'error|Couldn\'t create Subject.');
        }

        return redirect()->route('teacher.subjects.index');
    }


    public function update (SubjectRequest $request, $id) {
        $result = Subject::addUpdate($request->all(), Auth::id(), $id);

        if ($result) {
            Session::flash('msg', 'success|Subject updated successfully.');
        } else {
            Session::flash('msg', 'error|Couldn\'t update Subject.');
        }
        return redirect()->route('teacher.subjects.index');
    }


    public function destroy (Subject $subject) {
        $subject->delete();
        Session::flash('msg', 'success|Subject deleted successfully.');

        return redirect()->route('teacher.subjects.index');
    }


}
