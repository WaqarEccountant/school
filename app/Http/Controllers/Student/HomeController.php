<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index () {
        return view('student.dashboard');
    }

    public function exams ($type) {
        $output['courses'] = Subject::where('type',$type)->with('exams')->get();
        return view('student.exams', $output);
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
