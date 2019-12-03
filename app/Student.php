<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nama','nrp','email','jurusan'];
    // MassAssignment artinya boleh diisi
    //protected $guarded = ['nama','nrp','email','jurusan']; artinya gak boleh diisi
    // keduanya berfungsi untuk menghindari celah keamanan 
}
