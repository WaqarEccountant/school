<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function index () {
        $records = User::where('id', '!=', Auth::id())->get();
        return view('admin.users', compact('records'));
    }

    public function store (UserRequest $request) {
        $result = User::create([
            'name'     => $request->get('name'),
            'email'    => $request->get('email'),
            'mobile'   => $request->get('mobile'),
            'role'     => $request->get('role'),
            'password' => bcrypt($request->get('password')),
        ]);
        if ($result) {
            Session::flash('msg', 'success|User created successfully.');
        } else {
            Session::flash('msg', 'error|Couldn\'t create User.');
        }

        return redirect()->route('admin.users.index');
    }


    public function update (Request $request, $id) {
        $request->validate([
            'name'     => "required|string|min:2",
            'email'    => "required|email|unique:users,email," . $id,
            'mobile'   => "nullable|string",
            'role'     => "required",
            'password' => "nullable|string|min:6",
        ]);
        $data = [
            'name'   => $request->get('name'),
            'email'  => $request->get('email'),
            'mobile' => $request->get('mobile'),
            'role'   => $request->get('role'),
        ];
        if ($request->get('password') != '') {
            $data['password'] = bcrypt($request->get('password'));
        }
        $result = User::where('id', $id)->update($data);

        if ($result) {
            Session::flash('msg', 'success|User updated successfully.');
        } else {
            Session::flash('msg', 'error|Couldn\'t update user.');
        }
        return redirect()->route('admin.users.index');
    }


    public function destroy (User $user) {
        $user->delete();
        Session::flash('msg', 'success|User deleted successfully.');

        return redirect()->route('admin.users.index');
    }


}
