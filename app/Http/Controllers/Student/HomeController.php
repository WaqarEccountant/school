<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\ExamResult;
use App\Models\ExamType;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index () {
        return view('student.dashboard');
    }

    public function tests ($type) {
        $e_type = ExamType::where('name', $type)->first();
        $output['courses'] = Subject::where('type_id', $e_type->id)->with('exams')->get();
        $output['type'] = $type;
        return view('student.tests', $output);
    }

    public function testCreate ($exam_id) {
        $output['exam'] = Exam::findorfail($exam_id);
        $output['questions'] = Question::with('options')->where('exam_id', $exam_id)->get();
        return view('student.question-paper', $output);
    }

    public function testStore (Request $request, $exam_id) {
        $exam = Exam::find($exam_id);
        $answers = $request->get('answer');
        $questions = Question::with('options')->where('exam_id', $exam_id)->get();
        $total_questions = $questions->count();
        $correct = 0;
        $wrong = 0;
        $missed = 0;
        foreach ($questions as $question) {
            if (isset($answers[$question->id])) {
                $ans = $answers[$question->id];
                if ($question->type == 'objective') {
                    if ($question->option_id == $ans) {
                        $correct++;
                    } else {
                        $wrong++;
                    }
                } else {
                    $ans = strtolower(trim($ans));
                    if (strtolower(trim($question->answer)) == $ans) {
                        $correct++;
                    } else if ($ans != '') {
                        $wrong++;
                    } else {
                        $missed++;
                    }
                }
            } else {
                $missed++;
            }

        }

        $result = ExamResult::create([
            'exam_id'    => $exam_id,
            'subject_id' => $exam->subject_id,
            'user_id'    => Auth::id(),
            'total'      => $total_questions,
            'marks'      => $correct,
            'wrong'      => $wrong,
            'missed'     => $missed,
        ]);
        return redirect()->route('tests.result', $result->id);
    }

    public function testResult (ExamResult $result) {
        return view('student.paper-results', compact('result'));
    }

    public function leadBoard () {
        $results = ExamResult::with(['subject', 'user'])->orderBy('marks', 'desc')->take(10)->get();
     
        return view('student.lead-board', compact('results'));
    }

    public function setting () {
        return view('admin.setting');
    }

    public function changePassword (Request $request) {
        $request->validate([
            'old_password' => 'required',
        ]);
        $user = Auth::user();
        if (Auth::validate(['email' => $user->email, 'password' => $request->old_password])) {
            $request->validate([
                'password' => 'required|confirmed|string|min:6',
            ]);

            $user->password = bcrypt($request->password);
            $user->save();
            Session::flash('msg', 'success|Password updated successfully.');
            return back();
        }
        Session::flash('msg', 'error|Invalid password.');
        return back();
    }


}
