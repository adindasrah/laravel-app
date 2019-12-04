<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
	use SoftDeletes;
    protected $fillable = ['nama','nrp','email','jurusan'];
    // MassAssignment artinya boleh diisi
    //protected $guarded = ['nama','nrp','email','jurusan']; artinya gak boleh diisi
    // keduanya berfungsi untuk menghindari celah keamanan 
}
