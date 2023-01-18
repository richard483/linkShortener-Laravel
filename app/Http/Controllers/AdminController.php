<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::withTrashed()->get()->sortByDesc('deleted_at');
        return view('admin_welcome', ['users' => $users]);
    }

    public function deleteUser($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();

        return redirect()->back()->with('success', 'User: ' . $user->name . ' deleted successfully');
    }

    public function editUser(Request $request, $id)
    {
        $user = User::where('id', $id)->first();

        $user->name = $request->name;
        $user->role = $request->role;

        $user->save();

        return redirect()->back()->with('success', 'User: ' . $user->email . ' updated successfully');
    }

    public function restoreUser($id)
    {
        $user = User::where('id', $id)->withTrashed()->first();
        $user->restore();

        return redirect()->back()->with('success', 'User: ' . $user->name . ' restored successfully');
    }
}
