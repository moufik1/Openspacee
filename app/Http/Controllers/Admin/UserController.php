<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\UserModel;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.members.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.members.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telephone' => $request->telephone,
        ]);

        if ($request->has('categories')) { 
            $user->categories()->attach($request->categories);
        }

        return redirect()->route('admin.members.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $categories = Category::all();
        return view('admin.members.edit',compact('user','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserStoreRequest $request, User $user)
    {
        $request->user()->fill($request->validated());

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telephone' => $request->telephone,
        ]);

        if ($request->has('categories')) { 
            $user->categories()->sync($request->categories);
        }

        return redirect()->route('admin.members.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $member)
    {
        $member->categories()->detach();
        $member->delete();

        return redirect()->route('admin.members.index');
    }
}

