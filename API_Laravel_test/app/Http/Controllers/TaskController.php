<?php

namespace App\Http\Controllers;

use App\Http\Requests\TasksFilterRequest;
use App\Http\Resources\TaskResource;
use Illuminate\Http\Request;
use App\Http\Requests\TaskCreateRequest;
use App\Models\TaskModel;
use Illuminate\Support\Facades\Gate;

class TaskController extends Controller
{
    public function index(TasksFilterRequest $request){

        return TaskResource::collection(TaskModel::all()->paginate(10));

    }

    public function store(Request $request){
        Gate::authorize('createTask', TaskModel::class);
        return TaskResource::collection(TaskModel::create($request->all()));

    }
    public function update(Request $request, TaskModel $task){

        $task->update($request->all());
        return TaskResource::collection($task);
    }

    public function destroy(Request $request){

            $task = TaskModel::find($request->id);
            $task->delete();
            return response()->json($task);

    }

    public function show($id){
        return TaskResource::collection(TaskModel::find($id));
    }

}
