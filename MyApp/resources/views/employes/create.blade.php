@extends('adminlte::page')


@section('title')
Add new employe |Employes Application
@endsection
@section('content_header')
<h1>Add new employe</h1>
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
           <div class="text-center font-weight-bold  text-uppercase"><h4>Add new employe</h4></div>
           </div>
           <div class="card-body">
           <form action="{{route('employes.store')}}" class="mt-3" method="post">
           @csrf 
           <div class="form-group mb-3">
           <label for="full_name">Fullname</label>
           <input class="form-control" type="text"  name="full_name" placeholder="Fullname" value="{{old('full_name')}}" >
           </div>
             <div class="form-group mb-3">
           <label for="registration_number">Registration number</label>
           <input class="form-control" type="text"  name="registration_number" maxlength="8" placeholder="registration number" value="{{old('registration_number')}}" >
           </div>
             <div class="form-group mb-3">
           <label for="departs">Department</label>
           <input class="form-control" type="text"  name="departs" placeholder="Department" value="{{old('departs')}}" >
           </div>
             <div class="form-group mb-3">
           <label for="hire_date">Hire Date</label>
           <input class="form-control" type="date"  name="hire_date" placeholder="Hire Date" value="{{old('hire_date')}}" >
           </div>
            <div class="form-group mb-3">
           <label for="phone">Phone</label>
           <input class="form-control" type="tel"  name="phone" placeholder="Phone" value="{{old('phone')}}" >
           </div>
           <div class="form-group mb-3">
           <label for="address">Address</label>
           <input class="form-control" type="text"  name="address" placeholder="Address" value="{{old('address')}}" >
           </div>
            <div class="form-group mb-3">
           <label for="city">City</label>
           <input class="form-control" type="text" name="city" placeholder="City" value="{{old('city')}}" >
           </div>
           <div class="form-group">
           <button type="submit" class="btn btn-primary"> Submit</button>                                             
           </div>
           </form>

        </div>
        
        </div>
 </div>
</div>

@endsection 

