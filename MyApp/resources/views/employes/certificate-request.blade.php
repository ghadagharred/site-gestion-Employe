@extends('adminlte::page')
@section('title')
Work Certificate Request
@endsection
@section('content')
<div class='container'>
   <div class="row">
     <div class="col-md-8 mx-auto">
     <div class="card  p-3 my-5">
     <div class="card-header">
     <h3> Work Certificate Request</h3>
     </div>
     <div class="card-body">
     <p class="lead">
         <b> {{$employe->full_name}}</b> is presently employed with me in the followong :
        </p>
        <p class="lead">
         <b> {{$employe->departs}}</b>departement.
        </p>
          <p class="lead">
          His employment began on <b>{{$employe->hire_date}}</b>
         </p>
        <p class="lead">
         This certification is being issued upon the request of <b>{{$employe->full_name}}</b> for whatever legal purpose it may serve.
        </p>
         <p class="lead">
         issued on<b>{{\Carbon\Carbon::today()->toDateString()}}</b>at<b>{{\Carbon\Carbon::now()->toTimeString()}}</b>
        </p>
         
         <p  class="m-5">
           ________________
           ________________
           </p>
           <div class="my-4">
           <a 
           href="#"
           onclick="
           document.getElementById('printLink').style.display='none'
           setTimeout(function(){
             document.getElementById('printLink').style.display='inline-block'
           },2000);
           window.print();"
           class="btn btn-sm btn-primary" id="printLink">
           <i class="fas fa-print " > </i>
           </a>
           </div>
     </div>
        
     </div>
       
     </div>
   </div>
</div>

@endsection