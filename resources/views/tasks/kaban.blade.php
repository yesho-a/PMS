
@extends('layouts.pro')

@section('content')
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Josefin Sans">
<?php 
$done = array();
$progress = [];
$over = array();
$today = \Carbon\Carbon::today()->toDateString();

foreach ($protask as $key => $value) {
  $status = $value->completed;
  $due = $value->due_date;

  // if ($due !== null) {
  //   echo "Not null";
  //   echo '<br>';
  // } else {
  //   echo " null";
  // }
  
  if ($status == 1):
  $diff = \Carbon\Carbon::today()->diffInDays($due);
  $done[]=$value;
  elseif ($today < $due && $status == 0):
  $diff = \Carbon\Carbon::today()->diffInDays($due);
  $progress[] = $value;
  elseif ($today > $due && $status == 0): 
  $diff = \Carbon\Carbon::today()->diffInDays($due);
  $over[] =$value;    
        
 endif;
}



?>

<style>
.heading{
border-radius: 25%;

}

.box{
border-radius: 10%;

}

h4,h5{
  font-family:"Josefin Sans", serif;;
}
  </style>
  <?php
  
  
  ?>
  <div class="row pt-3 ml-4" >
    <span>
        <a href="/task/create" class="btn btn-success"  id="task"  data-toggle="modal" data-target="#exampleModalLong"><b><i class="fa fa-plus-circle" aria-hidden="true"></i>
            Add Task</b></a>
        <a href="/protask/{{$d}}" id="li-modal" class="btn btn-dark text-light"><b><i class="fa fa-list pe-2"></i>List View</b></a>
        <a href="/gantt/{{$d}}" id="li-modal" class="btn btn-danger text-light"><b><i class="fas fa-network-wired pe-2"></i>Gantt View</b></a>

      </span>
      

</div>

<div class="row justify-content-center pl-3 pr-3 pt-2 m-3">
  <div class="col-md text-dark">
    
      <div class="card">
          <div class="card-body">
  <div class="col">
    <h4 class="text-primary pl-3"> <strong>Project: {{$pro->title}}</strong></h4>  
  </div>
<hr>
    <div class="container px-4 pb-2">
      <div class="row gx-5">
        
        <div class="col" >

          <h4 class="bg-danger text-center p-2 heading" style="font-size: 20px" >
            <strong><i class="fas fa-stopwatch pe-2 text-white " style="font-size: 18px" aria-hidden="true"></i>Backlog</strong>
          </h4>
          <div class="p-3 bg-danger box" id="todo">
            @foreach ($over as $item)
            <div class="card">
              <div class="card-block p-2">
                <h5 class="card-title text-primary" style="font-weight:bold">{{$item->title}}</h5>
                <div>
                  {{$item->description}}<br>
             <span class="badge bg-danger">  <i class="fas fa-stopwatch pe-1 text-white" aria-hidden="true"></i>{{\Carbon\Carbon::today()->diffInDays($item->due_date)}} Days ovedue</span>
                <span class="badge bg-danger"><i class="fa fa-calendar pe-1 text-white" aria-hidden="true"></i>{{$item->due_date}}</span>
            </div>
            </div>
            </div>   
            @endforeach
          </div>
        </div>
        <div class="col">
          <h4 class="bg-warning text-center p-2 heading" style="font-size: 20px">
            <strong class="text-white"><i class='fas fa-spinner pe-2 text-white' style="font-size: 18px"></i>In-Progress</strong>
          </h4>

          <div class="p-3 bg-warning box" id="progress">
            @foreach ($progress as $item)
            <div class="card" >
              <div class="card-block p-2">
                <h5 class="card-title text-primary" style="font-weight:bold">{{$item->title}}</h5>
                <div>
                 {{$item->description}}<br>
                  <span class="badge bg-warning">  <i class="fas fa-spinner pe-1 text-dark" aria-hidden="true"></i><span class="text-dark">{{\Carbon\Carbon::today()->diffInDays($item->due_date)}} Days Remaining</span></span>
                     <span class="badge bg-warning"><i class="fa fa-calendar pe-1 text-dark" aria-hidden="true"></i><span class="text-dark">{{$item->due_date}}</span></span>
                  
                    </div>
              </div>
            </div>   
            @endforeach
           
          </div>
       
        </div>
        <div class="col">
          <h4 class="bg-success text-center p-2 heading" style="font-size: 20px">
            <strong><i class='fas fa-check pe-2' style="font-size: 18px"></i>Done</strong>
          </h4>

          <div class="p-3 bg-success box" id="done">
            @foreach ($done as $item)
            <div class="card">
              <div class="card-block p-2">
                <h5 class="card-title text-primary"  style="font-weight:bold">{{$item->title}}</h5>
                <p class="text-sm">{{$item->description}}</p>

              

                  <span class="badge bg-success">  <i class="fas fa-check pe-1 text-white" aria-hidden="true"></i>Done</span>
                     <span class="badge bg-success"><i class="fa fa-calendar  pe-1 text-white" aria-hidden="true"></i>{{$item->due_date}}</span>
               
              </div>
            </div>   
            @endforeach
          </div>
        </div>
      </div>
    </div>
          </div>
      </div>
  </div>
</div>

    
    @endsection