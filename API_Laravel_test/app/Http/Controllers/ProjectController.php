<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectCreateRequest;
use App\Http\Resources\ProjectResource;
use App\Models\ProjectModel;
use App\Models\TaskModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;


class ProjectController extends Controller
{
    public function index(ProjectModel $project){

        return ProjectResource::collection($project::all())->paginate(10);
    }

    public function store(ProjectCreateRequest $request, ProjectModel $project){

        Gate::authorize('createProject', $project);
        return ProjectResource::collection(Project::create($request->all()));
    }

    public function show($id){

        return ProjectResource::collection(TaskModel::find($id));

    }

    public function update(Request $request, ProjectModel $project){

        Gate::authorize('updateProject', $project);
        $project->update($request->all());
        return ProjectResource::collection($project);
    }

    public function destroy(ProjectModel $project, $id){
        Gate::authorize('deleteProject', $project);
        $project = ProjectModel::find($id)->delete();
        return response()->json($project);
    }
}
