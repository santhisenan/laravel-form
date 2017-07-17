<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    //

    public function create(){
      return view('projects.create' , [
        'projects' => Project::all(),
      ]);
    }

    public function store(){
      $this->validate(request() , [
        'name' => 'required|min:2',
        'description' => 'required'
      ]);

      Project::forceCreate([
        'name' =>request('name'),
        'description' => request('description')
      ]);

      return['message' => 'Project '.request('name') . ' created'];

    }
}
