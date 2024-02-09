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
    public function list(UsersDataTable $usersDataTable)
    {

        return $usersDataTable->render('backend.user.list');
    }

    // user store

    public function store(UserStoreRequest $request)
    {
        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'role' => $request->role,
                'password' => bcrypt('12345'), // Hash the password
            ]);

            if ($request->hasFile('image')) {
                if ($user->image) {
                    Storage::delete('public/' . $user->image);
                }
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileName = Str::uuid() . '.' . $extension;
                $filePath = $request->file('image')->storeAs('backend/user', $fileName, 'public');
                $user->image = $filePath;
                $user->save();
            }
            return response()->json([
                'message' => "User created Successfully",
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error: Something went wrong',
            ], 500);
        }
    }

    // update user
    public function updateUser(Request $request, User $user)
    {
        try {
            $user =  $user->findOrFail($request->input('user_id'));
            if ($user) {
                $user->update([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'role' => $request->role,
                ]);

                if ($request->hasFile('image')) {
                    if ($user->image) {
                        Storage::delete('public/' . $user->image);
                    }

                    $extension = $request->file('image')->getClientOriginalExtension();
                    $fileName = Str::uuid() . '.' . $extension;
                    $filePath = $request->file('image')->storeAs('backend/user', $fileName, 'public');
                    $user->image = $filePath;
                    $user->save();
                }
                return response()->json([
                    'message' => "User updated Successfully",
                ]);
            } else {
                return response()->json([
                    'message' => "User Not Found",
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error: Something went wrong',
            ], 500);
        }
    }

    // delete an user
    public function userDelete($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
        $user->delete();
        return response()->json(['message' => 'User deleted successfully'], 200);
    }
}
