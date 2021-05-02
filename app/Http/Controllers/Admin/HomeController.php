<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\ExamType;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index () {
        $output['stats']['exams'] = Exam::selectRaw('count(*) count')->value('count');
        $output['stats']['subject'] = Subject::selectRaw('count(*) count')->value('count');
        $output['stats']['exam_type'] = ExamType::selectRaw('count(*) count')->value('count');

        return view('admin.dashboard',$output);
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
