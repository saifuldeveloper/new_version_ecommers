<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Requests\Backend\UserStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\DataTables\Backend\UsersDataTable;
class UserController extends Controller
{
    // get user info
    public function profile()
    {
        $authUser = Auth::user();
        return view('backend.user.profile.index', compact('authUser'));
    }


    // update user info
    public function profileUpdate(Request $request)
    {
        try {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $authUser = User::where('id', Auth::user()->id)->first();
            $authUser->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            if ($request->hasFile('image')) {
                if ($authUser->image) {
                    Storage::delete('public/' . $authUser->image);
                }
                $filePath = $request->file('image')->storeAs('backend/profile', Str::uuid() . '.' . $request->file('image')->getClientOriginalName(), 'public');
                $authUser->image = $filePath;
                $authUser->save();
            }
            session()->flash('success', 'Profile updated successfully');
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong');
        }
        return back();
    }

    // user list

    // public function list()
    // {
    //     $users = User::orderBy('id', 'desc')->paginate(10);
    //     return view('backend.user.list', compact('users'));
    // }

    public function list(UsersDataTable $usersDataTable)
    {

        return $usersDataTable->render('backend.user.list');


    }

    // user store

    public function store(UserStoreRequest $request)
    {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt('12345'), // Hash the password
            ]);

            session()->flash('success', 'User Added successfully');

        return back();



    }






}
