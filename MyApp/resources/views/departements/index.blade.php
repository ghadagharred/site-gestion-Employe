@extends('adminlte::page')
@section('plugins.Datables',true)

@section('title')
List of departements |Employes Application
@endsection
@section('content_header')
<h1>List of Departements</h1>
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
   <div class="row ">
       <div class="col-md-10 mx-auto">
       <div class="card my-5">
           <div class="card-header" style="background-color: #8F9CC7; font-family: Arial, sans-serif; font-weight: bold;">
           <div class="text-center font-weight-bold  text-uppercase"><h4>Departements</h4></div>
           </div>
        </div>
        <div class="card-body">
         <table id="maTable" class=" table table-bordered  table stripped">
         <thead>
         <tr>
         <th>ID</th>
         <th>Nom_Departement</th>
         <th>Nom_directeur</th>
         </tr>
         </thead>
         <tbody> @foreach($departements as $key=> $departement)
         <tr>
         <td>{{$key+=1}}</td>
         <td>{{$departement->nom_departement}}</td>
         <td>{{$departement->nom_directeur}}</td>
         </tr>
         @endforeach
         </tbody>
         </table>
        </div>
        </div>
 </div>
</div>

@endsection 

