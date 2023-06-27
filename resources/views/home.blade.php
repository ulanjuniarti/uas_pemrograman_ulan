@extends('layouts.apps')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <title>UAS Ulan</title>
    <style>
        body {
            background: #eee;
        }
        #side_nav {
            background: #000;
            min-width: 250px;
            max-width: 250px
        }
        .content {
            min-height: 100vh;
            width: 100%;
        }
        .bg-custom{
            background-color:#00969a;
        }
        .nav-item > a{
            color:#fff;
            text-decoration: none;
            width: 100%;
            display: block;
            padding: 10px 15px;
        }
        .nav-item:hover{
            background: #fff;
            border-radius: 8px;
        }
        .nav-item:hover a{
            color: #000;
        }
        .active{
            background: #fff;
            border-radius: 8px;
        }
        .active a{
            color: #000;
        }
        .x-item > a{
            color:#fff;
            text-decoration: none;
            width: 100%;
            display: block;
            padding: 10px 15px;
        }     
        .x-item {
            list-style: none;
        }   
        .x-item:hover{
            background-color: #fff;
            color: #000;
            border-radius: 8px;
        }
        .x-item:hover a{
            color: #000;
        }
        .card-footer a{
            text-decoration: none;
        }
    </style>
</head>
<body>

@section('content')
<!-- SIDEBAR -->
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-custom">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a class="navbar-brand mt-3 ms-4" href="#">
                    <h3>Ulan Juniarti</h3>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-5" id="menu">
                    <li class="nav-item mb-3">
                        <a href="{{ url('home') }}" class="me-5">
                        <svg fill="none" class="me-2" stroke="currentColor" stroke-width="1.5" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
                        </svg>Data Pengguna</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a href="{{ url('barang') }}" class="me-5">
                        <svg fill="none" class="me-2" stroke="currentColor" stroke-width="1.5" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
                        </svg>Data Barang</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- NAVBAR -->
        <div class="col py-3">
            <nav class="navbar navbar-expand-md navbar-light bg-light shadow p-3 mb-1 bg-body-tertiary rounded">
                <div class="container">
                    <div class="navbar-band fs-3" href="{{ url('/') }}">
                        <h4 class="card-title">Selamat Datang, {{ Auth::user()->name }}!</h4>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-info mt-2 ms-2">Login</button></a></a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-outline-info mt-2 ">Register</button></a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
                    <!-- TABLE -->
            <div class="card mt-3">
                    <div class="card">
                        <div class="card-header">Data Pengguna</div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive px-4">
                                        <table class="table table-responsive table-bordered table-striped table-hover" id="example">
                                            <thead>
                                                <tr class="bg-primary text-white">
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Nama</th>
                                                    <th class="text-center">Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $no => $row)
                                                    <tr>
                                                        <td class="text-center">{{$no+1}}</td>
                                                        <td>{{$row->name}}</td>
                                                        <td class="text-center">{{$row->email}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>$(document).ready(function () {$('#example').DataTable();});
            </script>
        </div>
    </div>
</div>

@endsection
    
</body>
</html>