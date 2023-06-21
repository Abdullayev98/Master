<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Darsbob;
use Illuminate\Http\Request;


class DarsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Darsbob::query()->where('type','dars')->with('bobs')->paginate(10);
        return view('admin.darslar.index',compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bobs = Darsbob::query()->where('type','bob')->pluck('name','id')->all();
        return view('admin.darslar.create', compact('bobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $request['type']="dars";
        Darsbob::create($request->all());
        return redirect()->route('lessons.index')->with('success','Dars is created successfully');
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
        $lesson = Darsbob::find($id);
        $bobs = Darsbob::query()->where('type','bob')->pluck('name','id')->all();
        return view('admin.darslar.edit', compact('lesson','bobs'));
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
        $lesson = Darsbob::find($id);
        $request['type']="dars";
        $lesson->update($request->all());
        return redirect()->route('lessons.index')->with('success','Dars is updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Darsbob::destroy($id);
        return redirect()->route('lessons.index')->with('success','Dars is deleted successfully');
    }
}
