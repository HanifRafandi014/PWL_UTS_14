@extends('layouts.content')

@section('title', 'CRUD Data Bayi')
@section('content')
<x-laraveluts dashboard="" index="active"/>
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

	<section class="content">
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-left mt-2"><br>
						<h2 style="text-align: center;">DATA BAYI DI POSYANDU</h2><br>
					</div>

					<div class="float-left my-2">
						<form action="{{ route('posyandu.index') }}" method="GET" role="search">
							<input type="text" name="search" placeholder="Cari Data Bayi Posyandu">
							<button type="submit" class="btn btn-warning">Search</button>
						</form>
					</div>

					<div class="float-right my-2">
						<a class="btn btn-success" href="{{ route('posyandu.create') }}"> Input Data Bayi</a>
					</div>

					@if ($message = Session::get('success'))
					<div class="alert alert-success">
						<p>{{ $message }}</p>
					</div>
					@endif

					<table class="table table-bordered">
						<tr>
							<th>No_Urut</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Tanggal_Lahir</th>
							<th>Bb_Lahir</th>
							<th>Tb_Lahir</th>
							<th width="280px">Action</th>
						</tr>
						@foreach ($posyandu as $Posyandu)
						<tr>
							<td>{{ $Posyandu->no_urut }}</td>
							<td>{{ $Posyandu->nama }}</td>
							<td>{{ $Posyandu->alamat }}</td>
							<td>{{ $Posyandu->tanggal_lahir }}</td>
							<td>{{ $Posyandu->bb_lahir }}</td>
							<td>{{ $Posyandu->tb_lahir }}</td>
							<td>
								<form action="{{ route('posyandu.destroy',$Posyandu->no_urut) }}" method="POST">
									<a class="btn btn-info" href="{{ route('posyandu.show',$Posyandu->no_urut) }}">Show</a>
									<a class="btn btn-primary" href="{{ route('posyandu.edit',$Posyandu->no_urut) }}">Edit</a>
									@csrf 
									@method('DELETE')
									<form method="post" action="">
										<input type="hidden" name="no_urut" value="<?php echo $posyandu['no_urut']; ?>">
										<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Delete</button>
									</form>
								</form>
							</td>
						</tr>
						@endforeach
					</table>
					<!-- pagination -->
					{!! $posyandu->links()!!}
				</div>
			</div>
		</div>
	</section>
</div>
@endsection


