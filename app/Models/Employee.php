<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $table = "employee";

    protected $fillable = [
        'department_id', 'username','password', 'full_name', 'photo', 'address', 'phone', 'status',
    ];

    protected $hidden = [
        'password',
    ];

    function department(){
        return $this->belongsTo(Department::class);
    }
}
