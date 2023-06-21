<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Darsbob;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class BobController extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bobs = Darsbob::query()->where('type','bob')->paginate(10);
        return view('admin.boblar.index',compact('bobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.boblar.create');
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
        $request['type']="bob"; 
        Darsbob::create($request->all());
        return redirect()->route('bobs.index')->with('success','Bob is created successfully');
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
        $bob = Darsbob::find($id);
        return view('admin.boblar.edit', compact('bob'));
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
        $bob = Darsbob::find($id);
        $request['type']="bob";
        $bob->update($request->all());
        return redirect()->route('bobs.index')->with('success','Bob is updated successfully');

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
        return redirect()->route('bobs.index')->with('success','Bob is deleted successfully');
    }
}
