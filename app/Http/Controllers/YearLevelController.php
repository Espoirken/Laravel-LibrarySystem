<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\YearLevel;

class YearLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.year_level.index')->with('year_levels', YearLevel::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.year_level.create')>with('year_levels', YearLevel::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'year_level' => 'required|unique:year_levels',
        ]);
        $year_level = new YearLevel;
        $year_level->year_level = $request->year_level;
        $year_level->save();
        toastr()->success('The Year level was successfully created!');
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
        return view('admin.users.year_level.edit')->with('year_levels', YearLevel::find($id));
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
        $this->validate($request,[
            'year_level' => 'required',
        ]);
        $year_level = YearLevel::find($id);
        $year_level->year_level = $request->year_level;
        $year_level->save();
        toastr()->success('The Year level was successfully updated!');
        return redirect('year_levels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $year_levels = YearLevel::find($id);
        foreach ($year_levels->user as $year_level) {
            $year_level->delete();
        }
        $year_levels->delete();
        
        toastr()->error('The Year level was deleted!');
        return redirect('year_levels');;
    }
}
