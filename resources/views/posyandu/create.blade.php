@extends('posyandu.layout')
@section('content1')
<div class="container mt-5">
	<div class="row justify-content-center align-items-center">
		<div class="card" style="width: 24rem;">
			<div class="card-header">
				Tambah Data Bayi
			</div>
			<div class="card-body">
				@if ($errors->any())
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your i
					nput.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<form method="post" action="{{ route('posyandu.store') }}" id="myFo
				rm">
				@csrf
				<div class="form-group">
					<label for="no_urut">No_Urut</label>
					<input type="text" name="no_urut" class="form-control" id="no_urut" aria-describedby="no_urut" >
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama" >
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>   
					<input type="alamat" name="alamat" class="form-control" id="alamat" aria-describedby="password" >
				</div>
				<div class="form-group">
					<label for="tanggal_lahir">Tanggal_Lahir</label>
					<input type="tanggal_lahir" name="tanggal_lahir" class="form-control" id="tanggal_lahir" aria-describedby="tanggal_lahir" >
				</div>
				<div class="form-group">
					<label for="bb_lahir">Bb_Lahir</label>
					<input type="bb_lahir" name="bb_lahir" class="form-control" id="bb_lahir" aria-describedby="bb_lahir" >
				</div>
				<div class="form-group">
					<label for="tb_lahir">Tb_Lahir</label>
					<input type="tb_lahir" name="tb_lahir" class="form-control" id="tb_lahir" aria-describedby="tb_lahir" >
				</div>

				<form method="post" action="">
					<button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin menambahkan data ini?');">Submit</button>
				</form>
			</form>
		</div>
	</div>
</div>
</div>
@endsection