<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Storage;

class ProfileController extends Controller
{
    public function edit($id){
        $user = $user = User::where('id',$id)->first();
        return view('admin.profiles.edit',compact('user'));
    }

    public function update(Request $request,$id){
        $input = $request->all();
        $user =  User::where('id',$id)->first();

        if(isset($input['image'])){
            $input['image'] = Storage::disk('public')->putFile('media', $input['image']);
        }

        $user->update($input);
        return redirect()->route('profiles');
    }

}
