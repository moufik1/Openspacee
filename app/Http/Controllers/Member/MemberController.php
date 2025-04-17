<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use App\Models\Member;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\categorie_member;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\MemberStoreRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $users = User::all();
       return view('admin.memberes.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.memberes.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $user = User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'telephone'=>$request->telephone,

        ]);
        if($request->has('categories'))
        { 
            $user->categories()->attach($request->categories);
        }
        return to_route('admin.members.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $categories = Category::all();
        return view ('admin.memberes.edit',compact('user','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,User $user)
    {
        $request->validate(
            [
                'name'=>'required',
                'email' =>'required',
                'password' =>'required',
                'telephone' =>'required'
            ]);
        //$image = $category->image;
        // if($request->hasFile('image')){
        //     Storage::delete($category->image);
        //     $image= $request->file('image')->store('public/categories');
        // }
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> $request->password,
            'telephone' =>$request->telephone,

        ]);
        if($request->has('categories'))
        { 
            $user->categories()->sync($request->categories);
        }
        return to_route('admin.members.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->categories()->detach();
        $user->delete();
        return to_route('admin.members.index');
    }
}
