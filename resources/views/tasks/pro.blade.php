
@extends('layouts.pro')

@section('content')
<style>
#gantt {
        overflow-x: scroll;
      }

      #taska {
  list-style: none;
  counter-reset: item;
}
#taska li {
  padding-left: 25px;
  position: relative;
  margin-bottom: 10px;
}
#taska.alt li {
  padding-left: 0; /* clear */
  text-indent: 25px;
}
#taska li:before {
  content: '' counter(item, decimal-leading-zero) '';
  counter-increment: item;
  background-color: green;
  position: absolute;
  left: 0;
  top: 0;
  width: 20px;
  height: 20px;
  line-height: 20px;
  text-align: center;

  font-size: 10px;
  color: #fff;
  border-radius: 50%;
  text-indent: 0; /* clear */
}

#taska li:hover {
  background-color: #ffc;
}
</style>
<script
type="text/javascript"
src="https://www.gstatic.com/charts/loader.js"
></script>
<div class="row pt-1 ml-4" >
  <span>
      <a href="/task/create" class="btn btn-success"  id="task"  data-toggle="modal" data-target="#exampleModalLong"><b><i class="fa fa-plus-circle" aria-hidden="true"></i>
          Add Task</b></a>
      <a href="/kaban/{{$d}}" id="li-modal" class="btn btn-dark text-light"><b><i class="fa fa-list pr-2"></i>Board View</b></a>
      <a href="/kaban/{{$d}}" id="li-modal" class="btn btn-danger text-light"><b><i class="fas fa-chart-area pr-2"></i>Gantt View</b></a>

    </span>
</div>
<hr>
<div class="row justify-content-center pl-3 pr-3">
  <div class="col-md text-dark">
    
      <div class="card">
          <div class="card-body">
              <div class="container">
              
             
                  <div class="row">
                    <div class="col">
                      <h4 class="text-primary"> <strong>Project: {{$project->title}}</strong></h4>
                      <span><i><u><b>Project Tasks</b></u></i></span>

                     
                        <ul  id="taska">
                     @foreach($protask->sortBy('due_date') as $k )
                     @if ($k->completed ==1)
                     <li style="text-decoration-line: line-through"> {{$k->title}} - {{$k->due_date}}</li>
                     @else
                     <li> {{$k->title}} - {{$k->due_date}}</li>
                     @endif
            
                     @endforeach
                        </ul>
                     
                         
                    </div>
                
                  </div>
                 
              </div>
            
           
          </div>
        
      </div>
  </div>
</div>
@endsection