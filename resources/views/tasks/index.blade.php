
@extends('layouts.pro')
@section('content')
<style>

  .btn {
    border-radius: 12px;

  }
 
    /* Toggle Button */
.toggle-class {
	-webkit-appearance: none;
	-webkit-tap-highlight-color: transparent;
	position: relative;
	border: 0;
	outline: 0;
	cursor: pointer;
	margin: 0;
  
}


/* To create surface of toggle button */
.toggle-class:after {
	content: '';
	width: 40px;
	height: 20px;
	display: inline-block;
	border-radius: 18px;
  background: #a7a4a4;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200' fill='red' class='bi bi-x' viewBox='0 0 16 16' id='IconChangeColor'%3E%3Cpath d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z' id='mainIconPathAttribute'%3E%3C/path%3E%3C/svg%3E");
  background-size: 20px;
  background-position-x: 5px;
  background-position-y: center;
  background-repeat: no-repeat
  ;}


/* Contents before checkbox to create toggle handle */
.toggle-class:before {
	content: '';
	width: 20px;
	height: 20px;
	display: block;
	position: absolute;
	left: 25px;
	top: -1px;
	border-radius: 70%;
	background: rgb(255, 255, 255);
  
	box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
}


/* Shift the handle to left on check event */
.toggle-class:checked:before {
	left: 25px;
	box-shadow: -1px 1px 3px rgba(0, 0, 0, 0.6);
  
}
/* Background color when toggle button will be active */
.toggle-class:checked:after {
	background: #0e7e55;
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/checkmark-switcher.svg);
  background-repeat: no-repeat;
  background-size: 15px;
  background-position-y: center;
  background-position-x: 5px;
}
/* second table. */


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
  

}
    #sipi thead tr        { 
    height:60px;
    background:#FFED86;
    font-size:16px;
   
  }
/* Pagination. */
.pagination {
	background:#FFED86;
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
</style>

<div class="row justify-content-center p-5">
  <div class="col-md-10">
    
      <div class="card bg-light">
          <div class="card-body">
              <div class="container">
                  <div class="row">
                    <div class="col">
                      <div class="col pr-2">
                       <a href="/task/create" class="btn btn-dark mb-2 ml-3" id="task"  data-toggle="modal" data-target="#exampleModalLong"><b><i class="fas fa-plus-circle pe-1"></i>Add Task</b></a>
                       <button type="button" class="btn btn-danger btn-filter float-right mb-2 mr-1 " data-target="not-completed"><i class="fa fa-spinner pe-1" aria-hidden="true"></i>In Progress</button>
                       <button type="button" class="btn btn-success btn-filter  float-right mb-2 mr-1" data-target="completed"><i class="fa fa-check pe-1" aria-hidden="true"></i>
                        Completed</button>
                       <button type="button" class="btn btn-primary btn-filter float-right mb-2 mr-1" data-target="all"><i class="fa fa-tasks pe-1" aria-hidden="true"></i>
                        All</button>
                      
                  </div>
                      <div class = "col" id="myDiv">  
                        <!--		Start Pagination -->
                        <div class="pagination" style="font-size:16px;font-weight: bolder">
                         <ol id="numbers"></ol>
                       </div>
                       <!-- End pagination --></div>
                   
                    </div>
                  </div>
              </div>
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

<script type="text/javascript">

$(document).ready(function () {
  let x = Array();
  let y = Array();
  $("#myDiv").prepend(
    "<table class='table filter-table-data' id='sipi'><thead><tr><th>Task</th><th>Status</th></tr></thead><tbody></tbody></table>",
  );
  $.ajax({
    url: "/table",
    success: function (result) {
      jQuery.each(result, function (key, value) {
 
        let id = value.id;
        let task = value.title;
        let status = value.completed == 1 ? "completed" : "not-completed";
        let status2 = value.completed;
        let project = value.project.title;
        // let x;
        // let y;
        // if (project !== null) {
        //   x = value.project.title;
         
        // } else {
        //   x = "";
        // }

        let x;
        let y;
        if (project !== null) {
          x = value.project.title;
          if (value.project.color !== null) {
            y = value.project.color.color;
          } else {
            y = "purple";
          }
        } else {
          x = "";
        }
        let checked = status2 == 1 ? "checked" : "";
        let deco = status2 == 1 ? "line-through" : "none";
        var tds = [
          `<td class="simon"><a href=/task/${id}" style="color:inherit;text-decoration:none" >${task}</a><br><span class="badge font-italic project"  data-project="${x}"  style="background-color:${y};color:white" onclick="project(this)"><i>${x}</i></span></td>`,
          "<td>" +
            `<input data-id="${id}" class='active toggle-class' type='checkbox' ${checked} id='1' name='complete' style='margin-top:5px'>` +
            "</td>",
        ];
        $("#sipi").append(
          `<tr style="text-decoration:${deco}" data-target='${status}' data-project="${x}">` +
            tds.join("") +
            "</tr>",
        );
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


    }
})
})
    
// mark as completed or not complete
$(document).on("change", ".toggle-class", function (e) {
  e.preventDefault();
  var status = $(this).prop("checked") == true ? 1 : 0;
  let id = $(this).data("id");
  var url = '{{ route("complete", ":id") }}';
  url = url.replace(":id", id);
  let x = id;
  if (status == 1) {
    $(this).parent().parent().css("text-decoration", "line-through");
  } else {
    $(this).parent().parent().css("text-decoration", "none");
  }
  $.ajax({
    type: "GET",
    dataType: "json",
    url: url,
    data: {completed: status, id: id},
    success: function (data) {},
  });
});


$(document).ready(function () {
  $(".btn-filter").on("click", function (e) {
  e.preventDefault();
  var $target = $(this).data("target");

  if ($target != "all") {
    $("#sipi tbody tr").css("display", "none");
    $('#sipi tbody tr[data-target="' + $target + '"]').fadeIn("slow");
    const frow = $("#sipi > tbody > tr[data-target='" + $target + "']");
    const frowsPerPage = 6;
    const frowCount = frow.length;
    const fpageCount = Math.ceil(frowCount / frowsPerPage);
    const fnumbers = $("#numbers");
    $("#numbers").empty();

    for (let i = 0; i < fpageCount; i++) {
      fnumbers.append('<li><a href="#">' + (i + 1) + "</a></li>");
    }

    //displayRows(1);

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
      var start = (index - 1) * frowsPerPage;
      var end = start + frowsPerPage;
      frow.hide();
      frow.slice(start, end).show();
    }
  } else {
    $("#sipi tbody tr").css("display", "none").fadeIn("slow");

    // Create Pagination for generated table
    const rowsPerPage = 6;
    const rows = $("#sipi > tbody").children();
    const rowsCount = rows.length;
    const pageCount = Math.ceil(rowsCount / rowsPerPage);
    const numbers = $("#numbers");

    $("#numbers").empty();
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
  }
});

});

function project(d) {
  var $project = d.getAttribute("data-project");
  console.log($('#sipi tbody tr[data-project="' + $project + '"]'));
  $("#sipi tbody tr").css("display", "none");
  $('#sipi tbody tr[data-project="' + $project + '"]').fadeIn("slow");
}
</script>
@endsection

