<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  public $table = 'tasks';
 protected $fillable=[
    'description',
 ];
    use HasFactory;
}
