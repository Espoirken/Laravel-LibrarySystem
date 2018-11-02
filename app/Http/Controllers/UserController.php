<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Type;
use App\YearLevel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $year_levels = YearLevel::all();
        $types = Type::all();
        if ($year_levels->count() == 0) {

            toastr()->info('Please create a year level  first!');
            return redirect('year_levels');
        }
        if ($types->count() == 0) {

            toastr()->info('Please create a type of user  first ');
            return redirect()->back();
        }
        return view('admin.users.index')->with('users', User::paginate(10))
                                        ->with('types', Type::find(1));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.users.create')->with('users', User::all())
                                        ->with('year_levels', YearLevel::all());
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
            'email' => 'required|email|unique:users,email',
            'gender' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'type_id' => 'required',
            'status' => 'required',
        ]);
            
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->gender = $request->gender;
        $users->address = $request->address;
        $users->year_level_id = $request->year_level_id;
        $users->contact = $request->contact;
        $users->type_id = $request->type_id;
        $users->status = $request->status;
        $users->password = bcrypt(123123);
        $users->save();
        toastr()->success('The user was successfully created!');
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
        return view('admin.users.edit')->with('users', User::find($id));
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
        $user = User::find($id);
        $this->validate($request, [
            'name' => 'required',
            'email' => "email|unique:users,email,$id",
            'gender' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'type_id' => 'required',
            'status' => 'required',
        ]);
        $users = User::find($id);
        $users->name = $request->name;
        $users->gender = $request->gender;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->contact = $request->contact;
        $users->type_id = $request->type_id;
        $users->year_level_id = $request->year_level_id;
        $users->status = $request->status;
        $users->save();
        toastr()->success('The users was updated successfully!');
        return redirect('/users');
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
        return redirect('users');
    }

//     public function search($searchKey){
//         $users = $this->toArray();

//         $users['type_id'] = $this->type_id['user_type'];

//         return view('search', compact('users'));
//     }
}
