<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Darsbob;
use App\Pdf;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data = Darsbob::where('type','bob')->with(['lessons'=>function($q){
            $q->select('id','p_id','name')->with('pdfs')->get();
        }])->get();
        // dd($data);
        return view('front.pro', compact('data'));
    }
    public function videos(){
        $data = Pdf::query()->whereIn('type',['mp4','webm','mpeg'])->get();
        return view('front.videos', compact('data'));
    }
    public function view_file($id)
    {
        $pdf = Pdf::query()->find($id);
        return view('front.view', compact('pdf'));
    }
}
