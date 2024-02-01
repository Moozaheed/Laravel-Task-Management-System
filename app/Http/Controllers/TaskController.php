<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::paginate(5);
        //$tasks = Task::latest()->paginate(5);
        return view('tasks.index', compact('tasks'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the data
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        
        //create a new task in DB
        Task::create($request->all());
        
        //redirect to tasks page
        return redirect()->route('tasks.index')->with('success', 'Task Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //validate the data
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        
        //update the task in DB
        $task->update($request->all());
        
        //redirect to tasks page
        return redirect()->route('tasks.index')->with('success', 'Task Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //detete the task from DB
        $task->delete();

        //redirect the user and display success message
        return redirect()->route('tasks.index')->with('success', 'Task Deleted Successfully.');
    }
}
