@extends('layouts.apps')
@section('content')
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
    </style>
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
                    <div class="card-header">Data Barang</div>
                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                            <div class="card-body">
                                <a href="{{ url('barang') }}" class="btn btn-primary btn-sm mb-3" title="Add New Contact"><i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Tambah Data
                                </button>
                                <div class="table-responsive px-4">
                                <table class="table table-responsive table-bordered table-striped table-hover data-table">
                                            <thead class="table-success">
                                                    <th>No</th>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Stok Awal</th>
                                                    <th>Barang Masuk</th>
                                                    <th>Barang Keluar</th>
                                                    <th>Stok Akhir</th>
                                                    <th>Aksi</th>
                                                
                                            </thead>
                                            <tbody>
                                            @foreach($data as $row)
                                                <tr>
                                                    <td>{{++$i}}</td>
                                                    <td>{{$row->kd_barang}}</td>
                                                    <td>{{$row->nama_barang}}</td>
                                                    <td>{{$row->stok_awal}}</td>
                                                    <td>{{$row->barang_masuk}}</td>
                                                    <td>{{$row->barang_keluar}}</td>
                                                    <td>{{$row->stok_akhir}}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal{{$row->id}}">
                                                        Edit
                                                        </button>
                                                        <a href="{{url('hapus')}}/{{$row->id}}">
                                                        <button class="btn btn-danger">Hapus</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

               <!-- The Modal -->
               <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <form action="{{url('simpan')}}" method="POST">
                        @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Barang</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                            <label>Kode Barang</label>
                            <input type="text" name="kd_barang" class="form-control" value="{{ old('kd_barang') }}">
                            @error('kd_barang')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label>Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang') }}">
                            @error('nama_barang')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label>Stok Awal</label>
                            <input type="number" name="stok_awal" class="form-control" value="{{ old('stok_awal') }}">
                            @error('stok_awal')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label>Barang Masuk</label>
                            <input type="number" name="barang_masuk" class="form-control" value="{{ old('barang_masuk') }}">
                            @error('barang_masuk')
                            <label>Barang Keluar</label>
                            <input type="number" name="barang_keluar" class="form-control" value="{{ old('barang_keluar') }}">
                            @error('barang_keluar')
                            <label>Stok Akhir </label>
                            <input type="number" name="stok_akhir" class="form-control" value="{{ old('stok_akhir') }}">
                            @error('stok_akhir')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>

                <!-- The Modal -->
                @foreach($data as $row)
                <div class="modal" id="myModal{{$row->id}}">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <form action="{{url('update')}}/{{$row->id}}" method="GET">
                        @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data Barang</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                            <label>Kode Barang</label>
                            <input type="text" name="kd_barang" class="form-control" value="{{$row->kd_barang}}">
                            <label>Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" value="{{$row->nama_barang}}">
                            <label>Stok Awal</label>
                            <input type="number" name="stok_awal" class="form-control" value="{{$row->stok_awal}}">
                            <label>Barang Masuk</label>
                            <input type="number" name="barang_masuk" class="form-control" value="{{$row->barang_masuk}}">
                            <label>Barang Keluar</label>
                            <input type="number" name="barang_keluar" class="form-control" value="{{$row->barang_keluar}}">
                            <label>Stok Akhir</label>
                            <input type="number" name="stok_akhir" class="form-control" value="{{$row->stok_akhir}}">
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
                @endforeach
                @endsection



