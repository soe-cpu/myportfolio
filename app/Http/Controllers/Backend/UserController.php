<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('backend.user.index')->with('users',$users);
    }
    public function edit($id){
        $user = User::find($id);
        return view('backend.user.edit',compact('user'));
    }
    public function update(Request $request,$id){
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
        ]);
        return redirect('admin/users')->with('successMsg','You have successfully updated!');
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users')->with('deleteSuccessMsg','You have successfully deleted!');
    }

}
