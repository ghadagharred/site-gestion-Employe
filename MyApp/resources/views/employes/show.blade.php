@extends('adminlte::page')


@section('title')
 show employe |Employes Application
@endsection
@section('content_header')
<h1>show employe</h1>
@endsection
@section('content')
<style>
  body {
        background-color:#C0C0C0; /* Couleur gris clair de votre choix pour toute la page */
    }
.custom-small-box {
        background-color:#E9967A; 
    }
</style>

<div class="container">
 @include('layouts.alert')
        
   <div class="row ">
       <div class="col-md-8 mx-auto">
       <div class="card my-5">
           <div class="card-header" style="background-color: #8F9CC7; font-family: Arial, sans-serif; font-weight: bold;">
           <div class="text-center font-weight-bold  text-uppercase"><h4>{{$employe->full_name}}</h4></div>
           </div>
           <div class="mt-2 text-center font-weight-bold  text-uppercase">
           
           <a href="{{route('vacation.request',$employe->registration_number)}}"  class="btn btn-outline-dark">vacation Request</a>
           <a href="{{route('certificate.request',$employe->registration_number)}}"  class="btn btn-outline-danger">Work Certificate </a>
           </div>
           <div class="card-body">
           
           <div class="form-group mb-3">
           <label for="full_name">Fullname</label>
           <input class="form-control" type="text" disabled name="full_name" placeholder="Fullname" value="{{$employe->full_name}}" >
           </div>
             <div class="form-group mb-3">
           <label for="registration_number">Registration number</label>
           <input class="form-control  rounded-0" type="text" disabled name="registration_number" maxlength="8" placeholder="registration number" value="{{$employe->registration_number}}" >
           </div>
             <div class="form-group mb-3">
           <label for="departs">Department</label>
           <input class="form-control  rounded-0" type="text" disabled name="departs" placeholder="Department" value="{{$employe->departs}}" >
           </div>
             <div class="form-group mb-3">
           <label for="hire_date">Hire Date</label>
           <input class="form-control  rounded-0" type="date" disabled name="hire_date" placeholder="Hire Date" value="{{$employe->hire_date}}" >
           </div>
            <div class="form-group mb-3">
           <label for="phone">Phone</label>
           <input class="form-control  rounded-0" type="tel" disabled name="phone" placeholder="Phone" value="{{$employe->phone}}" >
           </div>
           <div class="form-group mb-3">
           <label for="address">Address</label>
           <input class="form-control  rounded-0" type="text" disabled name="address" placeholder="Address" value="{{$employe->address}}" >
           </div>
            <div class="form-group mb-3">
           <label for="city">City</label>
           <input class="form-control rounded-0" type="text" disabled name="city" placholder="City" value="{{$employe->city}}" >
           </div>
          

        </div>
        
        </div>
 </div>
</div>

@endsection 

