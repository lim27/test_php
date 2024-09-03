<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    public $timestamps = false;
    protected $fillable = ['email', 'first_name', 'last_name', 'avatar'];
}