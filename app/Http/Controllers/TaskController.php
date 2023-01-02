<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\project;
use DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Hello world";
    }

    public function todo()
    {
        $tasks = Task::all();
        $pro = Project::all();

        return view('tasks.index')->with('tasks',$tasks)->with('pro',$pro);
    

    }


public function table()
{
    $tn = Task::all();
    $y= $tn->load('project'); // eager loading
    return  response()->json($y);
}

    public function complete($id)

    {

        $task = Task::findOrFail($id);
        $task->completed = !$task->completed;
        $task->update();
        return redirect('task');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = Project::pluck('title','id');
       return view("tasks.create")->with('project',$project);
   
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

    $project = new Task;   
    $project->title=$request->title;
    $project->description=$request->description;
    $project->project_id= $request->project_id;
    $project->start_date=$request->start_date;
    $project->due_date=$request->due_date;
    $project->save();
    return redirect('/project')->with('success','Project Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(task $task)
    {
        //
    }


    public function kaban($id){
        $pro = Project::find($id);
        $d = $id;
        $protask = Task::where('project_id', $id)->get();
         return view('tasks.kaban')->with('pro',$pro)->with('protask',$protask)->with('d',$d);
      
    }

    public function gantt($id){
        $project = project::find($id);
        $protask = Task::where('project_id', $id)->get();
        $d = $id;
        return view('tasks.gantt')->with('protask',$protask)->with('project',$project)->with('d',$d);
    }


    public function taskDash()
    {
         $tasks = Task::all();
        $pro = Project::all();
  
        $tpro = Task::selectRaw('count(*) AS total, project_id')->groupBy('project_id')->get();

       return view('tasks.dash')->with('tasks',$tasks)->with('pro',$pro)
       ->with('tpro',$tpro);
     

    }
    
}
