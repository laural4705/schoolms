<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function View() {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.user.profile.view', compact('user'));
    }

    public function Edit() {
        $id = Auth::user()->id;
        $profile = User::find($id);
        return view('admin.user.profile.edit', compact('profile'));
    }

    public function Update(Request $request) {
        $data =  User::findOrFail(Auth::user()->id);
        $data->role = $request->role;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->sex = $request->sex;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/'), $filename);
            $data['image'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Your profile has been updated',
            'alert-type' => 'success'
        );
        return redirect()->route('profile.view')->with($notification);
    }

    public function EditPW() {
        $id = Auth::user()->id;
        $pw = User::find($id);
        return view('admin.user.profile.edit_pw', compact('pw'));
    }

    public function UpdatePW(Request $request) {
        $validate = $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        $hashedPassword = Auth::user()->password;
        if(Hash::check( $request->current_password,$hashedPassword)) {
            $user = User::findOrFail(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');
        }
        else {
            return redirect()->back();
        }
    }
}
