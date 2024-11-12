<?php

namespace App\Http\Controllers;

use App\Models\Task;
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
        $validatedData = request()->validate([
            'description' => 'required|string|max:255',
        ]);
        $task=Task::create(['description'=>request('description',)]);
        return redirect('/') ;
    }
}
