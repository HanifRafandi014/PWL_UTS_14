@extends('layouts.content')

@section('title', 'Dashboard')

@section('content')
<x-laraveluts dashboard="active" index=""/>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="card-body">
      <div class="row">
        <h1 id="selamatDatang"><b>Selamat Datang Admin Posyandu</b></h1>
        <h1 id="selamatDatang"><b>Mengubah CRUD Data Bayi di Posyandu</b></h1>
      </div>
    </div>
  </section>
</div>

@endsection