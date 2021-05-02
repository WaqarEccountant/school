<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExamTypeRequest;
use App\Models\ExamType;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{

    public function store (Request $request) {
        $exam_id = $request->get('exam_id');
        $result = Question::addUpdate($request->all(), $exam_id);
        if ($result) {
            $options = $request->get('option', []);
            if ($result->type == 'objective' && count($options)) {

                $correct_key = $request->get('correct');
                $correct_id = null;
                foreach ($options as $key => $value) {
                    $option = Option::create([
                        'body'        => $value['value'],
                        'question_id' => $result->id,
                    ]);
                    if ($key == $correct_key) {
                        $correct_id = $option->id;
                    }

                }
                $result->option_id = $correct_id;
                $result->save();
            }
        }
        if ($result) {
            Session::flash('msg', 'success|Question created successfully.');
        } else {
            Session::flash('msg', 'error|Couldn\'t create Question.');
        }

        return redirect()->route('admin.exams.show', $exam_id);
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


    public function destroy (Question $question) {
        $question->delete();
        Session::flash('msg', 'success|Question deleted successfully.');

        return redirect()->back();
    }


}
