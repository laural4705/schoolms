<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function View() {
        $users['allUsers'] = User::all();
       return view('admin.user.view', $users);
    }

    public function Add() {
        return view('admin.user.add');
    }

    public function Store(Request $request) {
        $validate = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);
        $data = new User();
        $data->role = $request->role;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        $notification = array(
            'message' => 'User has been added',
            'alert-type' => 'success'
        );
        return redirect()->route('users.view')->with($notification);
    }

    public function Edit($id) {
        $editUser = User::findOrFail($id);
        return view('admin.user.edit', compact('editUser'));
    }

    public function Update(Request $request, $id) {
        $data =  User::findOrFail($id);
        $data->role = $request->role;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();

        $notification = array(
            'message' => 'User has been updated',
            'alert-type' => 'success'
        );
        return redirect()->route('users.view')->with($notification);
    }

    public function Delete($id) {
        $deleteUser = User::findOrFail($id);
        $deleteUser->delete();

        $notification = array(
            'message' => 'User has been deleted',
            'alert-type' => 'error'
        );
        return redirect()->route('users.view')->with($notification);
    }
}
