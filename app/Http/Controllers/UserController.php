<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.users.index')->with('users', User::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|unique:users',
            'gender' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'type_id' => 'required',
            'year_level' => 'required',
            'status' => 'required',
        ]);
            
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->gender = $request->gender;
        $users->address = $request->address;
        $users->contact = $request->contact;
        $users->type_id = $request->type_id;
        $users->year_level = $request->year_level;
        $users->status = $request->status;
        $users->password = bcrypt(123123);
        $users->save();
        toastr()->success('Saved changes successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.users.edit')->with('user', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|unique:users',
            'gender' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'type_id' => 'required',
            'year_level' => 'required',
            'status' => 'required',
        ]);
        $users = User::find($id);
        $users->name = $request->name;
        $users->gender = $request->gender;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->contact = $request->contact;
        $users->type_id = $request->type_id;
        $users->year_level = $request->year_level;
        $users->status = $request->status;
        $users->save();
        toastr()->success('The users was updated successfully!');
        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        toastr()->error('The user is deleted!');
        return redirect()->back();
    }

    public function search(){
        
    }
}
