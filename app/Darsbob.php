<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Darsbob extends Model
{
    // use HasFactory;

    protected $fillable = ['name','type','p_id'];
    public function bobs(){
        return $this->belongsTo(Darsbob::class,'p_id');
    }
    public function lessons(){
        return $this->hasMany(Darsbob::class,'p_id');
    }
    public function pdfs(){
        return $this->hasMany(Pdf::class,'dars_id');
    }
    public function videos(){
        return $this->hasMany(Video::class,'dars_id');
    }
}
