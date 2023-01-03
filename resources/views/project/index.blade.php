@extends('layouts.pro')
@section('content')
<style>

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
<div class="row justify-content-center p-5 ">
  <div class="col-md">
    
      <div class="card">
          <div class="card-body">
              <div class="container" style="padding: 1rem;">
                 
                        <span >
                            <a href="/project/create" class="btn btn-dark mb-2 ml-3" id="task"  data-toggle="modal" data-target="#exampleModalLong"><b><i class="fas fa-plus-circle pe-1"></i>Add Project</b></a>

                          </span>
                      
                     

       <div class="container  pt-2 ">
          <table class="table bg-light"  id='sipi' >
             <thead>
                <tr>
                 
                   <th>No</th>
                 
                   <th>Projects </th>
                </tr>
             </thead>
             <tbody>
              @foreach($project as $k)
               <tr>
                <td>
                    {{$k->id}}
                  </td>
               <td>
                <a href="/kaban/{{$k->id}}" style="color: inherit;text-decoration: none"> {{$k->title}}</a></td>
               
               </tr>
               <tr>
          
                
                </tr>
               @endforeach
             </tbody>
          </table>
          <div class="pagination" style="font-size:16px;font-weight: bolder">
            <ol id="numbers"></ol>
          </div>
       </div>
                    </div>
                  </div>
        
      </div>
  </div>
</div>
@endsection
