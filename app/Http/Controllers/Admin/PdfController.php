<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Darsbob;
use App\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PdfController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdfs = Pdf::query()->with('dars')->paginate(10);
        return view('admin.pdf.index',compact('pdfs','videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lessons = Darsbob::query()->where('type','dars')->pluck('name','id')->all();
        return view('admin.pdf.create', compact('lessons'));
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
            'file' => 'required|mimes:txt,xls,pdf,mp4,webm,mpeg|max:50000',
            'dars_id' => 'required|integer',
        ]);
        if($request->hasFile('file')){
            $file = $request->file('file');
            $type = $file->getClientOriginalExtension();
            $title = $file->getClientOriginalName();
            $fileName = time().'_'.$title;
            $file->move(\public_path('files/'), $fileName);
            // dd($request->all());
            $pdf = new Pdf([
                'title' => $title,
                'type' => $type,
                'file' => $fileName,
                'dars_id'=>$request->dars_id
            ]);
            $pdf->save();
        }
        return redirect()->route('pdfs.index')->with('success','Data is created successfully');
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
        $pdf = Pdf::find($id);
        $lessons = Darsbob::query()->where('type','dars')->pluck('name','id')->all();
        return view('admin.pdf.edit', compact('lessons','pdf'));
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
        $request->validate([
            'file' => 'required|mimes:txt,xls,pdf,mp4,webm,mpeg|max:50000',
            'dars_id' => 'required|integer',
        ]);
        $pdf = Pdf::find($id);
        if($request->hasFile('file')){
            if(File::exists('files/'.$pdf->file))
            {
                File::delete('files/'.$pdf->file);
            }
            $file = $request->file('file');
            $type = $file->getClientOriginalExtension();
            $title = $file->getClientOriginalName();
            $fileName = time().'_'.$title;
            $file->move(\public_path('files/'), $fileName);

            $pdf->update([
                'title'=>$title,
                'type'=>$type,
                'file'=>$fileName,
                'dars_id'=>$request->dars_id
            ]);

        }
        return redirect()->route('pdfs.index')->with('success','Fayl is updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pdf::destroy($id);
        return redirect()->route('pdfs.index')->with('success','Fayl is deleted successfully');
    }
}
