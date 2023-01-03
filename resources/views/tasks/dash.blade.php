@extends('layouts.pro')
@section('content')
<style>
.card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}
.l-bg-cherry {
    background: linear-gradient(to right, #493240, #f09) !important;
    color: #fff;
}

.l-bg-blue-dark {
    background: linear-gradient(to right, #373b44, #4286f4) !important;
    color: #fff;
}

.l-bg-green-dark {
    background: linear-gradient(to right, #0a504a, #38ef7d) !important;
    color: #fff;
}

.l-bg-orange-dark {
    background: linear-gradient(to right, #a86008, #ffba56) !important;
    color: #fff;
}

.card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
    font-size: 110px;
}

.card .card-statistic-3 .card-icon {
    text-align: center;
    line-height: 50px;
    margin-left: 15px;
    color: #000;
    position: absolute;
    right: -2px;
    top: 10%;
    opacity: 0.1;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}

.l-bg-green {
    background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
    color: #fff;
}

.l-bg-orange {
    background: linear-gradient(to right, #f9900e, #ffba56) !important;
    color: #fff;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}

#sipi {
  border-collapse: collapse;
  overflow: hidden;
  margin-bottom: 0;

}
#sipi td{
  padding: 0.4rem;
  border-top: none;
  background-color: whitesmoke;
}

#sipi td,th {

margin: 0;
  padding: 0;
  border: none;
  text-align: center;
  color: rgb(34, 29, 29);

}
    #sipi thead tr        { 
    height:60px;
    font-size:16px;
   background: #b92b27;
   background: linear-gradient(70deg, blue, rgb(214, 45, 74));
   color: white;

   
  }

  #pro1 {
  border-collapse: collapse;
  overflow: hidden;
  margin-bottom: 0;

}

#pro1 td{
  padding: 0.4rem;
  border-top: none;
  background-color: whitesmoke;
}

#pro1 td,th {

margin: 0;
  padding: 0;
  border: none;
  text-align: center;
  color: rgb(34, 29, 29);

}


#pro1 thead tr        { 
    height:60px;
    font-size:16px;
   background: #b92b27;
   background: linear-gradient(70deg, blue, rgb(214, 45, 74));
   color: white;

   
  }
#sipi2 {
  border-collapse: collapse;
  overflow: hidden;
  margin-bottom: 0;

}
#sipi2 td{
  padding: 0.4rem;
  border-top: none;
  background-color: whitesmoke;
}

#sipi2 td,th {

  margin: 0;
  padding: 0;
  border: none;
  text-align: center;
  color: rgb(34, 29, 29);
  

}
    #sipi2 thead tr        { 
    height:60px;
    font-size:16px;
   background: #b92b27;
   background: linear-gradient(70deg, blue, rgb(214, 45, 74));
   color: white;

   
  }


/* Pagination. */
.pagination {
    background: #b92b27;
    background: linear-gradient(70deg, blue, rgb(214, 45, 74));
   color: white;
	padding: 1rem;
	display: flex;
	justify-content: center;

}
/* Pagination. */
.pagination1 {
    background: #b92b27;
    background: linear-gradient(70deg, blue, rgb(214, 45, 74));
   color: white;
	padding: 1rem;
	display: flex;
	justify-content: center;

}

#numbers {
	padding: 0;
	margin: 0 1rem;
	list-style-type: none;
	display: flex;
}

#numbers li a {
	color: rgb(0, 0, 0);
	padding: .5rem 1rem;
	text-decoration: none;
	opacity: .7;
}

#numbers li a:hover {
	opacity: 1;
}

#numbers li a.active {
	opacity: 1;
	background: #fff;
	color: #333;
}

/* Pagination. */
.pagination {
    background: #b92b27;
    background: linear-gradient(70deg, blue, rgb(214, 45, 74));
   color: white;
	padding: 1rem;
	display: flex;
	justify-content: center;

}

#numbers1 {
	padding: 0;
	margin: 0 1rem;
	list-style-type: none;
	display: flex;
}

#numbers1 li a {
	color: rgb(0, 0, 0);
	padding: .5rem 1rem;
	text-decoration: none;
	opacity: .7;
}

#numbers1 li a:hover {
	opacity: 1;
}

#numbers1 li a.active {
	opacity: 1;
	background: #fff;
	color: #333;
}
/* Pagination overdue  */

#pagover{
  background: #b92b27;
   background: linear-gradient(70deg, blue, rgb(214, 45, 74));
   color: white;
	padding: 1rem;
	display: flex;
	justify-content: center;
}
#numover {
  padding: 0;
	margin: 0 1rem;
	list-style-type: none;
	display: flex;
}


#numover li a {
	color: rgb(0, 0, 0);
	padding: .5rem 1rem;
	text-decoration: none;
	opacity: .7;
}

#numover li a:hover {
	opacity: 1;
}

#numover li a.active {
	opacity: 1;
	background: #fff;
	color: #333;
}

#pro2 {
  border-collapse: collapse;
  overflow: hidden;
  margin-bottom: 0;

}

#pro2 td{
  padding: 0.4rem;
  border-top: none;
  background-color: whitesmoke;
}

#pro2 td,th {

margin: 0;
  padding: 0;
  border: none;
  text-align: center;
  color: rgb(34, 29, 29);

}


#pro2 thead tr        { 
    height:60px;
    font-size:16px;
   background: #b92b27;
   background: linear-gradient(70deg, blue, rgb(214, 45, 74));
   color: white;

   
  }
  /* pagination project*/
  #num {
  padding: 0;
	margin: 0 1rem;
	list-style-type: none;
	display: flex;
}


#num li a {
	color: rgb(0, 0, 0);
	padding: .5rem 1rem;
	text-decoration: none;
	opacity: .7;
}

#num li a:hover {
	opacity: 1;
}

#num li a.active {
	opacity: 1;
	background: #fff;
	color: #333;
}
</style>
<?php

$count=0;
$count2 =0;
$total = count($tasks);
foreach ($tasks as $k) {
 
    if ($k->completed==1) {
        $count++;
    }
    else {
        $count2++;
    }
    
}

$td = [];
$next = [];
$over = [];

foreach ($tasks as $k) {
    $due = $k->due_date;
    $today = \Carbon\Carbon::today()->toDateString();// returns todays date
    $tom =  \Carbon\Carbon::tomorrow()->toDateString(); //Returns tomorrow date and time
    $status = $k->completed;
    // if not null
    if ($due != null) {
       if ($today > $due && $status == 0):
       $over[]=$k->title;
       elseif ($today == $due && $status == 0): // Will not compile.
       $td[] =$k->name;
       elseif ($tom == $due && $status == 0): // Will not compile.
       $next[] =$k->title;              
     endif;
    }
}
?>
<div class="container mb-5">
<div class="row pt-3 ml-4" >
    <span>
        <a href="/task/create" class="btn btn-success"  id="task"  data-toggle="modal" data-target="#exampleModalLong"><b><i class="fa fa-plus-circle pe-1" aria-hidden="true"></i>
            Add Task</b></a>
        <a href="/project/create" class="btn btn-primary" id="project"  data-toggle="modal" data-target="#pro"><b><i class="fas fa-project-diagram pe-1"></i>Add Project</b></a>
        <a href="/todo" id="li-modal" class="btn btn-dark text-light"><b><i class="fas fa-tasks pe-1"></i><span class="ps-1">View Tasks</span></b></a>
      </span>
</div>
<hr>
<div class="col-md-10  pl-4 " style="justify-content: center;">
    <div class="row ">
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-tasks"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0"> <strong> Total Tasks</strong></h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                            <strong>  <?php echo count($tasks); ?></strong>
                            </h2>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-project-diagram"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0"><strong>Total Projects</strong></h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                               <strong> <?php echo count($pro); ?></strong>
                            </h2>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-spinner"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0"><strong>Pending Tasks</strong></h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                <strong>   <?php echo $count2.'/'.$total;?></strong>
                            </h2>
                        </div>
                      
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-check"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0"><strong>Completed Tasks</strong></h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                <strong>   <?php echo $count.'/'.$total;?> </strong>
                            </h2>
                        </div>
                       
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row ml-5">
    <div class="col-5">
        <div class="card" id="next"  style="background: #b92b27;background: linear-gradient(to top, #1565C0, #b92b27)">
            <img src="{{ asset("build/assets/images/today.png") }}" alt="AdminLTE Docs Logo Small"  height="150">
            <div class="card-body text-white">
              <h5 class="card-title ml-3"  style="font-family: 'Lucida Console', 'Courier New', monospace;"><strong>Today's Activities</strong></h5>
              <p class="card-text"  style="font-family: 'Lucida Console', 'Courier New', monospace;"> <ul><?php  
               foreach ($td as $k) {
                  echo "<li>".$k."</li>";
                   }
                        ?></ul></p>
            </div>
          </div>
            
    </div>
      

<style>
#next {
  flex-direction: row;
}
#next img {
  width: 30%;
}
.act {
  list-style;
}

    </style>
<div class="col-5">
    <div class="card" id="next" style="background: #b92b27;background: linear-gradient(to top, #1565C0, #b92b27)">
        <img src="{{ asset("build/assets/images/tomorrow.png") }}" alt="AdminLTE Docs Logo Small"  height="150">
        <div class="card-body text-white">
          <h5 class="card-title ml-3" style="font-family: 'Lucida Console', 'Courier New', monospace;" ><strong>Tomorrow's Activities</strong></h5>
          <p class="card-text" style="font-family: 'Lucida Console', 'Courier New', monospace;"> <ul class="act"><?php  
           foreach ($next as $k) {
              echo "<li>".$k."</li>";
               }
                    ?></ul></p>
        </div>
      </div>    
</div>
</div>
<hr>
<div class="row ">
<div class = "col-5 ml-4 mb-2 " id="myDiv">  
    <!--		Start Pagination -->
    <div class="pagination" style="font-size:16px;font-weight: bolder">
     <ol id="numbers"></ol>
   </div>
   <!-- End pagination --></div>

   <div class = "col-5 mb-2" id="myDiv2">  
    <div class="pagination1" style="font-size:16px;font-weight: bolder">
        <ol id="numbers1"></ol>
      </div>
   </div>
</div>
<hr>
<div class="row">
  <div class = "col-5"> 
    <table class="table ml-4 mb-0"  id="pro1" >                
        <thead>
          <tr>
            
            <th scope="col" class="text-white"> <i class="fas fa-project-diagram pe-1 text-white"></i>Project List</th>

    
          </tr>
        </thead>
        @foreach ($pro as $post)
        <tbody>
          <tr>
          
            <td>
              @foreach($tpro as $t)
              @if ($t->project_id == $post->id)
              {{$post->title}}<span class="badge badge-success ml-3 text-white">{{ $t->total }}</span></h1>
              @endif
             
              @endforeach
           </td>
        
       
          </tr>
         
        </tbody>
        @endforeach

      </table>
      <div class="pagination1 ml-4 w-100 mb-2" style="font-size:16px;font-weight: bolder">
        <ol id="num"></ol>
      </div>
  </div>
  <div class = "col-5"> 
    <table class="table ml-4 mb-2"  id="pro2" >                
        <thead>
          <tr>
            
            <th scope="col" class="text-white"><i class="fas fa-stopwatch	 mr-2 text-white" aria-hidden="true"></i>
              Overdue Tasks</th>

    
          </tr>
        </thead>
        @foreach ($over as $post)
        <tbody>
         
          <tr>
          
            <td>{{$post}}</td>
       
          </tr>
       
        </tbody>
       
        @endforeach
      </table>
      <div class="pagination1 ml-4 w-100 mb-2" style="font-size:16px;font-weight: bolder">
        <ol id="numover"></ol>
      </div>
</div>
</div>
</div>

<div class="modal open" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered " role="document">
    <!-- Modal content-->
    <div class="modal-content bg-primary">
      <div class="p-4">
      <h4> <strong><i class="fas fa-plus-circle pr-1"></i>Add Task</strong></h4>
   
      <form id="myForm">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group row">
          <div class="col-6 mr-1">
            <label for="name" style="margin-bottom: 0">Date Due:</label>
              <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" id="dtp"/>
                  <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
              </div>
          </div>
          <div class="col-5">
            <label for="name" style="margin-bottom: 0">Project:</label>
        <select class="country m-0 p-0"  style="width: 150px;height: 36px;"> 
          <option value="select" >Select Project</option>
          @foreach($pro as $k)
          <option value="{{$k->id}}">{{$k->name}} </option>  
          @endforeach      
  </select>   
        </div>
        </div>
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

          <button class="btn btn-dark  ml-2 float-lg-right" id="ajaxSubmit"><i class="fa fa-paper-plane mr-1 " aria-hidden="true"></i>
            Submit</button>
            <button type="button" class="btn btn-dark float-lg-right" data-dismiss="modal"><i class="fa fa-times mr-1 " aria-hidden="true"></i>Close</button>


      </form> 
      </div>
     </div>
 </div>
  </div>


  <div class="modal open" id="pro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered " role="document">
      <!-- Modal content-->
      <div class="modal-content bg-primary">
        <div class="p-4">
        <h4> <strong><i class="fas fa-plus-circle pr-1"></i>Add Project</strong></h4>
     
        <form id="myForm">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name2">
          </div>
          <div class="form-group row">
          <div class="col-5">
            <label for="name" style="margin-bottom: 0">Color:</label>
        
        </div>
          </div>
          <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
  
            <button class="btn btn-dark  ml-2 float-lg-right" id="submitpro"><i class="fa fa-paper-plane mr-1 " aria-hidden="true"></i>
              Submit</button>
              <button type="button" class="btn btn-dark float-lg-right" data-dismiss="modal"><i class="fa fa-times mr-1 " aria-hidden="true"></i>Close</button>
  
  
        </form> 
        </div>
       </div>
   </div>
    </div>
</div>

<script type="text/javascript">
  $(function () {
    $("#datetimepicker1").datetimepicker({format: "L", format: "YYYY-MM-DD"});
  });
//Generate table for completed and pending tasks
    $(document).ready(function () {
      let x = Array();
      let y = Array();
      $("#myDiv").prepend(
        "<table class='table filter-table-data mb-2' id='sipi'><thead ><tr><th class='text-white'><i class='fas fa-spinner pe-1 text-white'></i>Pending Tasks</th></tr></thead><tbody></tbody></table>",
      );
      $.ajax({
        url: "/table",
        success: function (result) {
          jQuery.each(result, function (key, value) {
            let id = value.id;
            let task = value.title;
            let status = value.completed == 1 ? "completed" : "not-completed";
            let status2 = value.completed;
            let project = value.project;
            let x;
            let y;
            if (project !== null) {
              x = value.project.title;
              
                y = "green";
              
            } else {
              x = "";
            }
            var tds = [
              `<td class="simon">${task} <wbr><span class="badge font-italic project m-1"  data-project="${x}"  style="background-color:${y};color:white" onclick="project(this)">${x}</span></td>`
            ];
            if (status2 == 0) {
                let display = 'none';
            $("#sipi").append(
              `<tr  data-target='${status}' data-project="${x}">` +
                tds.join("") +
                "</tr>",
            );
            } 
          
          
          });
    
          // Create Pagination for generated table
          const rowsPerPage = 6;
          const rows = $("#sipi > tbody").children();
          const rowsCount = rows.length;
          //  const rows = $('#my-table tbody tr');
    
          const pageCount = Math.ceil(rowsCount / rowsPerPage);
          const numbers = $("#numbers");
    
          // Generate the pagination.
          for (var i = 0; i < pageCount; i++) {
            numbers.append('<li><a href="#">' + (i + 1) + "</a></li>");
          }
          // Mark the first page link as active.
          $("#numbers li:first-child a").addClass("active");
          // Display the first set of rows.
          displayRows(1);
    
          // On pagination click.
          $("#numbers li a").click(function (e) {
            var $this = $(this);
            e.preventDefault();
            // Remove the active class from the links.
            $("#numbers li a").removeClass("active");
            // Add the active class to the current link.
            $this.addClass("active");
            // Show the rows corresponding to the clicked page ID.
            displayRows($this.text());
          });
    
          // Function that displays rows for a specific page.
          function displayRows(index) {
            var start = (index - 1) * rowsPerPage;
            var end = start + rowsPerPage;
            rows.hide();
            rows.slice(start, end).show();
          }
        },
      });

// Completed tasks
      $("#myDiv2").prepend(
        "<table class='table filter-table-data mb-2' id='sipi2'><thead ><tr><th class='text-white'><i class='fas fa-check pe-1'></i>Completed Tasks</th></tr></thead><tbody></tbody></table>",
      );
      $.ajax({
        url: "/table",
        success: function (result) {
          jQuery.each(result, function (key, value) {
            console.log(value);
            let id = value.id;
            let task = value.title;
            let status = value.completed == 1 ? "completed" : "not-completed";
            let status2 = value.completed;
            let project = value.project;
            let x1;
            let y;
            if (project !== null) {
              x1 = value.project.title;
             
                y = "green";
              
            } else {
              x = "";
            }
           
            var tds = [
              `<td class="simon">${task}<span class="badge font-italic project m-1"  data-project="${x1}"  style="background-color:${y};color:white" onclick="project(this)">${x1}</span></td>`
            ];
            if (status2 == 1) {
                
            $("#sipi2").append(
              `<tr  data-target='${status}' data-project="${x1}">` +
                tds.join("") +
                "</tr>",
            );
            } 
          
          
          });
       // Create Pagination for generated table
       const rowsPerPage = 6;
      const rows = $("#sipi2 > tbody").children();
      const rowsCount = rows.length;
      //  const rows = $('#my-table tbody tr');

      const pageCount = Math.ceil(rowsCount / rowsPerPage);
      const numbers = $("#numbers1");

      // Generate the pagination.
      for (var i = 0; i < pageCount; i++) {
        numbers.append('<li><a href="#">' + (i + 1) + "</a></li>");
      }
      // Mark the first page link as active.
      $("#numbers1 li:first-child a").addClass("active");
      // Display the first set of rows.
      displayRows(1);

      // On pagination click.
      $("#numbers1 li a").click(function (e) {
        var $this = $(this);
        e.preventDefault();
        // Remove the active class from the links.
        $("#numbers1 li a").removeClass("active");
        // Add the active class to the current link.
        $this.addClass("active");
        // Show the rows corresponding to the clicked page ID.
        displayRows($this.text());
      });

      // Function that displays rows for a specific page.
      function displayRows(index) {
        var start = (index - 1) * rowsPerPage;
        var end = start + rowsPerPage;
        rows.hide();
        rows.slice(start, end).show();
      }
        
        }
       
      });
    });
// Add Task
jQuery(document).ready(function () {
  jQuery("#ajaxSubmit").click(function (e) {
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
      },
    });
    jQuery.ajax({
      url: "{{ url('/task/post') }}",
      method: "post",
      data: {
        name: jQuery("#name").val(),
        due_date: jQuery("#dtp").val(),
        project_id: jQuery(".country option:selected").val(),
        _token: $("#token").val(),
      },
      success: function (result) {
        console.log(result);
        window.location.href = "/dash";
      },
    });
  });
});

// Add Task
jQuery(document).ready(function () {
  jQuery("#submitpro").click(function (e) {
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="_token"]').attr("content"),
      },
    });
    jQuery.ajax({
      url: "{{ url('/pro') }}",
      method: "get",
      data: {
        name: jQuery("#name2").val(),
        color_id: jQuery(".color option:selected").val(),
        _token: $("#token").val(),
      },
      success: function (result) {
        console.log(result);
        window.location.href = "/dash";
      },
    });

  });
});

// pagination for overdue tasks
jQuery(document).ready(function () {
  const rowsPerPage = 6;
     const rows = $("#pro2 > tbody").children();
      const rowsCount = rows.length;
      const pageCount = Math.ceil(rowsCount / rowsPerPage);
      const numbers = $("#numover");
      for (var i = 0; i < pageCount; i++) {
            numbers.append('<li><a href="#">' + (i + 1) + "</a></li>");
          }

       // Mark the first page link as active.
       $("#numover li:first-child a").addClass("active");
      // Display the first set of rows.
            // On pagination click.
            $("#numover li a").click(function (e) {
        var $this = $(this);
        e.preventDefault();
        // Remove the active class from the links.
        $("#numover li a").removeClass("active");
        // Add the active class to the current link.
        $this.addClass("active");
        // Show the rows corresponding to the clicked page ID.
        displayRows($this.text());
      });
      displayRows(1);
 // Function that displays rows for a specific page.
 function displayRows(index) {
        var start = (index - 1) * rowsPerPage;
        var end = start + rowsPerPage;
        rows.hide();
        rows.slice(start, end).show();
      }
    });


    //  pagination for projects
    jQuery(document).ready(function () {
      const rowsPerPage = 6;
     const rows = $("#pro1 > tbody").children();
      const rowsCount = rows.length;
      const pageCount = Math.ceil(rowsCount / rowsPerPage);
      const numbers = $("#num");
      for (var i = 0; i < pageCount; i++) {
            numbers.append('<li><a href="#">' + (i + 1) + "</a></li>");
          }

       // Mark the first page link as active.
       $("#num li:first-child a").addClass("active");
      // Display the first set of rows.
            // On pagination click.
            $("#num li a").click(function (e) {
        var $this = $(this);
        e.preventDefault();
        // Remove the active class from the links.
        $("#num li a").removeClass("active");
        // Add the active class to the current link.
        $this.addClass("active");
        // Show the rows corresponding to the clicked page ID.
        displayRows($this.text());
      });
      displayRows(1);
 // Function that displays rows for a specific page.
 function displayRows(index) {
        var start = (index - 1) * rowsPerPage;
        var end = start + rowsPerPage;
        rows.hide();
        rows.slice(start, end).show();
      }    
    });
    </script>
@endsection
