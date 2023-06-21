<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    // use HasFactory;
    protected $fillable = ['title','dars_id', 'type','file'];

    public function dars(){
        return $this->belongsTo(Darsbob::class,'dars_id');
    }
}
