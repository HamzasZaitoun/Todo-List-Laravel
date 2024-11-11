<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class TaskController extends Controller
{
   public function index()
   {
    return view('tasks.index');

    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store()
    {
        return request()->all();
    }
}