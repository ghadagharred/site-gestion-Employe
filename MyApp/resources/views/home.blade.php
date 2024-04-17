@extends('adminlte::page')

@section('title', 'HOME | Employes Application')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
<style>
    body {
        background-color: #C0C0C0; /* Couleur gris clair de votre choix pour toute la page */
    }

    .custom-small-box {
        background-color: #8F9CC7;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .custom-small-box .inner {
        text-align: center;
    }

    .custom-small-box .icon {
        font-size: 50px;
        color: #fff;
        margin-bottom: 10px;
    }

    .custom-small-box h3 {
        font-size: 36px;
        color: #fff;
        margin-bottom: 10px;
    }

    .custom-small-box p {
        font-size: 18px;
        color: #fff;
    }

    .custom-small-box .small-box-footer {
        color: #fff;
        display: block;
        text-align: center;
        padding: 5px 0;
    }

    .custom-small-box .small-box-footer i {
        margin-left: 5px;
    }
</style>

<div class="container">
    <div class="row my-5">
        <div class="col-md-4">
            <div class="small-box custom-small-box">
                <div class="inner">
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>{{ \App\Models\Employe::count() }}</h3>
                    <p>Employes</p>
                </div>
                <a href="{{ url('admin/employes') }}" class="small-box-footer">More information <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="small-box custom-small-box">
                <div class="inner">
                    <div class="icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>{{ \App\Models\Departement::count() }}</h3>
                    <p>Departements</p>
                </div>
                <a href="{{ url('admin/departements') }}" class="small-box-footer">More information <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
