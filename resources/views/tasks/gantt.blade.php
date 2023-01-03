
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

 .tooltip {
        position: absolute;
        text-align: left;
        width: auto;
        height: auto;
        padding: 10px 10px 10px 10px;
        font: 14px sans-serif;
        background-color: rgb(155, 255, 221);
        border: 0px;
        border-radius: 8px;
        pointer-events: none;
      }
</style>
<script src="https://d3js.org/d3.v7.min.js"></script>
<div class="row pt-1 ml-4" >
  <span>
      <a href="/task/create" class="btn btn-success"  id="task"  data-toggle="modal" data-target="#exampleModalLong"><b><i class="fa fa-plus-circle  pe-2" aria-hidden="true"></i>
          Add Task</b></a>
      <a href="/protask/{{$d}}" id="li-modal" class="btn btn-dark text-light"><b><i class="fa fa-list pe-2"></i>List View</b></a>
      <a href="/kaban/{{$d}}" id="li-modal" class="btn btn-danger text-light"><b><i class="fas fa-chart-area pe-2"></i>Board View</b></a>

    </span>
</div>
<hr>
<div class="row justify-content-center pl-3 pr-3">
  <div class="col-md text-dark">
    
      <div class="card">
          <div class="card-body">
              <div class="container" style="padding: 1rem;">
              
             
                  <div class="row">
                    <div class="col">
                      <h4 class="text-primary"> <strong>Project: {{$project->title}}</strong></h4>  
                    </div>
                
                  </div>
                  <div  id="gantt">
                   
                  </div>
              </div>
            
           
          </div>
        
      </div>
  </div>
</div>

<script type="text/javascript">
  var parseDate = d3.timeParse("%Y-%m-%d");
        var tasks = {!! json_encode($protask) !!};
      
        let color = ["gray", "white"];
        var margin = {top: 50, right: 0, bottom: 50, left: 100};
        var width = 1000 - margin.left - margin.right;
        height = 450 - margin.top - margin.bottom;
        h = tasks.length * 30 + 50;
        barH = 30;

        // Randomize colors
        function getRandomColor() {
          var letters = "0123456789ABCDEF".split("");
          var color = "#";
          for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
          }
          return color;
        }

        // loop through tasks array
        tasks.forEach(function (d) {
          d.from = new Date(Date.parse(d.created_at));
          d.to = parseDate(d.due_date);
          console.log(d.name);
        });

        // x - axes
        var x = d3.scaleTime().range([40, width]);
        x.domain([
          d3.min(tasks, function (d) {
            return d.from;
          }),
          d3.max(tasks, function (d) {
            return d.to;
          }),
        ]);
// y-axes
let y = d3
          .scaleBand()
          .domain(tasks.map((task) => task.title))
          .range([0, h]);
        // x-axes ticks
        let xAxis = d3
          .axisBottom(x)
          .tickFormat(d3.timeFormat("%d-%b-%y"))
          .tickSize(3)
          .ticks(d3.timeWeek.every(1));

        var yAxis = d3.axisLeft(y).ticks(tasks.length).tickSize(0);
        // initialize svg
        var svg = d3
          .select("#gantt")
          .append("svg")
          .attr("class", "gantt")
          .attr("width", width + margin.left + margin.right)
          .attr("height", h)
          .append("g")
          .attr(
            "transform",
            "translate(" + margin.left + "," + margin.top + ")",
          );

        svg
          .append("g")
          .attr("class", "axis1")

          .attr("transform", "translate(0,-35)")
          .call(xAxis);

        let rect = svg
          .selectAll("rect")
          .data(tasks)
          .enter()
          .append("g")
          .append("rect")
          .attr("width", width + 100)
          .attr("height", 30)
          .attr("x", -100)
          .attr("y", function (d, i) {
            return i * 30;
          })
          .attr("fill", function (d, i) {
            if (i % 2 == 0) {
              return "#ffffff ";
            } else {
              return "#f5f5f5";
            }
          })
          .attr("stroke", "black")
          .attr("stroke-width", 0.2);
    // Create the tooltip
        const tooltip = d3
          .select("body")
          .append("div")
          .attr("class", "tooltip")
          .attr("id", "tooltip")
          .style("opacity", 100);

        var rectangle = svg
          .append("g")
          .selectAll("rect")
          .data(tasks)
          .enter()
          .append("rect")
          .attr("x", function (d) {
            return x(d.from);
          })
          .attr("y", function (d, i) {
            return i * 30;
          })
          .attr("width", function (d) {
            return x(d.to) - x(d.from);
          })
          .attr("height", 20)
          .attr("fill", "red")
          .attr("class", "rect")
          .attr("rx", 15)
          .attr("ry", 15)
          .attr("fill", function (d) {
            return getRandomColor();
          })
          .attr("transform", "translate(0,5)") .on("mouseover", function (event, d) {
            console.log(d);
            tooltip.transition().duration(200).style("opacity", 0.7);
            tooltip
              .html(
                "<b>Task:</b> " +
                  d.title +
                  "<br>" +
                  "<b>From: </b>" +
                  d.from.toDateString() +
                  "<br>" +
                  "<b>To: </b>" +
                  d.to.toDateString(),
              )
              .style("left", event.pageX + 3 + "px")
              .style("top", event.pageY + 10 + "px");
          })
          .on("mouseout", function (d) {
            //d3.select(this).classed("selected", false);
            tooltip.transition().duration(400).style("opacity", 0);
          });


      //

      svg
          .append("rect")
          .attr("x", -100)
          .attr("y", 0)
          .attr("width", 140)
          .attr("height", h - 52)
          .attr("stroke", "black")
          .attr("stroke-width", 0.1)
          .attr("fill", "transparent");

        let ts = svg
          .append("g")
          .append("rect")
          .attr("x", -100)
          .attr("y", -35)
          .attr("width", 140)
          .attr("height", 35)
          .attr("stroke", "black")
          .attr("stroke-width", 0.1)
          .attr("fill", "transparent");

        svg
          .append("text")
          .attr("class", "tasks")
          .text("Tasks")
          .attr("x", -80)
          .attr("y", -15);

        svg
          .append("g")
          .append("rect")
          .attr("x", 40)
          .attr("y", -35)
          .attr("width", width - 40)
          .attr("height", 35)
          .attr("stroke", "black")
          .attr("stroke-width", 0.1)
          .attr("fill", "transparent");

        var line = svg
          .append("g")
          .selectAll("text.value")
          .data(tasks)
          .enter()
          .append("text")
          .attr("x", -100)
          .attr("y", function (d, i) {
            return i * 30;
          })
          .text(function (d) {
            
            return d.title;
          })
          .style("fill", "rgb(32, 32, 32)")
          .style("font-size", "11px")
          .attr("transform", "translate(5,20)");
        // line

        let date = new Date();
        let today = x(date);
        svg
          .append("line")
          .style("stroke", "red")
          .style("stroke-width", 2)
          .style("stroke-dasharray", "3, 3")
          .attr("x1", today)
          .attr("y1", -35)
          .attr("x2", today)
          .attr("y2", h);

</script>

@endsection

