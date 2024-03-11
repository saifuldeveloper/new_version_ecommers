<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use App\DataTables\Backend\RolesDataTable;
use App\DataTables\Backend\UsersDataTable;
use App\Http\Requests\Backend\UserStoreRequest;

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
        $roles = Role::all();
        return $usersDataTable->render('backend.user.list', compact('roles'));
    }

    // user store
    public function store(UserStoreRequest $request)
    {
        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt('12345'), // Hash the password
            ]);

            $user->syncRoles($request->role);

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
                ]);
                $user->syncRoles($request->role);

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

    // returns role list
    public function roleIndex(RolesDataTable $rolesDataTable)
    {
        return $rolesDataTable->render('backend.user.role.list');
    }

    // create role
    public function roleCreate()
    {
        $permissions = Permission::all();
        return view('backend.user.role.create', compact('permissions'));
    }

    // store role info
    public function roleStore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'unique:roles,name', 'regex:/^[a-zA-Z]+$/'],
        ]);
        try {
            $role = Role::create(['name' => $request->name]);
            $permissionNames = [];
            if ($request->has('permissions') && is_array($request->permissions)) {
                $permissionNames = Permission::whereIn('id', $request->permissions)->pluck('name')->toArray();
            }
            $role->syncPermissions($permissionNames);

            Session::flash('success', 'Role created successfully');
            return redirect()->route('role.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // delete a role
    public function roleDelete($id)
    {
        $role = Role::find($id);
        if (empty($role)) {
            return response()->json(['error' => 'Role not found'], 404);
        }
        $role->delete();
        return response()->json(['message' => 'Role deleted successfully'], 200);
    }

    // edit role info
    public function roleEdit($id)
    {
        try {
            $role = Role::with('permissions')->find($id);
            $permissions = Permission::all();
            return view('backend.user.role.edit', compact('role', 'permissions'));
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // update role info
    public function roleUpdate(Request $request, Role $role)
    {
        $request->validate([
            'name' => ['required', 'string', 'regex:/^[a-zA-Z]+$/'],
        ]);
        try {
            $role->update(['name' => $request->name]);
            $permissionNames = [];
            if ($request->has('permissions') && is_array($request->permissions)) {
                $permissionNames = Permission::whereIn('id', $request->permissions)->pluck('name')->toArray();
            }
            $role->syncPermissions($permissionNames);

            Session::flash('success', 'Role updated successfully');
            return redirect()->route('role.index');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
