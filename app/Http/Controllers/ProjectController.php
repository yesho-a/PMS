<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\task;
use App\Models\Color;
use DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //   $project = Project::all();
    //   return view("project.index")->with('project',$project);

      $project = Project::all();
      $task = Task::selectRaw('count(*) AS total, project_id')->groupBy('project_id')->get();
      return view('project.index')->with('project',$project)->with('task',$task);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("project.create");
    }


    public function proTask($id){
        $project = project::find($id);
        $protask = Task::where('project_id', $id)->get();
        $d = $id;
       return view('tasks.pro')->with('protask',$protask)->with('project',$project)->with('d',$d);
      
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $this->validate($request,['title'=>'required','description'=>'required'
        ]);
    
        $project = new Project;   
        $project->title=$request->title;
        $project->description=$request->description;
        $project->color_id=$request->color_id;
        $project->save();
        return redirect('/project')->with('success','Project Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        //
    }

    public function colors(){
        DB::table('colors')->insert(
            ['color' => 'aqua']
            );

            return "Color added";
    }
}
