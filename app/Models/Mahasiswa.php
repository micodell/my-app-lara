<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'mahasiswa';

    // protected $fillable = ['name','email','birthdate','no_ktp','school_name','gpa'];
}
