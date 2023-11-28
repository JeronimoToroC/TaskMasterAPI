<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function store(StoreTaskRequest $request)
    {
        $validatedData = $request->validated();

        $task = Task::create($validatedData);
        return response()->json($task, Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
        $task = Task::with('category')->findOrFail($id);
        return response()->json($task);
    }

    public function update(UpdateTaskRequest $request, string $id)
    {
        $task = Task::findOrFail($id);
        $validatedData = $request->validated();

        $task->update($validatedData);
        return response()->json($task);
    }

    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
