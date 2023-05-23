<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;

    protected $table = "students";

    protected $fillables = ["first_name", "middle_name", "last_name", "date_of_birth", "address"];
}
