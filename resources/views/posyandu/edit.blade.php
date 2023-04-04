@extends('posyandu.layout')
@section('content1')
<div class="container mt-5">
	<div class="row justify-content-center align-items-center">
		<div class="card" style="width: 24rem;">
			<div class="card-header">
				Edit Data Bayi
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
				<form method="post" action="{{ route('posyandu.update', $Posyandu->no_urut) }}" id="myForm">
					@csrf
					@method('PUT') 
					<div class="form-group">
						<label for="no_urut">No_Urut</label>
						<input type="text" name="no_urut" class="form-control" id="no_urut" value="{{ $Posyandu->no_urut }}" aria-describedby="no_urut" >
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" id="nama" value="{{ $Posyandu->nama }}" aria-describedby="nama" >
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="alamat" name="alamat" class="form-control" id="alamat" value="{{ $Posyandu->alamat }}" aria-describedby="alamat" >
					</div>
					<div class="form-group">
						<label for="tanggal_lahir">Tanggal_Lahir</label>
						<input type="tanggal_lahir" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $Posyandu->tanggal_lahir }}" aria-describedby="tanggal_lahir" >
					</div>
					<div class="form-group">
						<label for="bb_lahir">Bb_Lahir</label>
						<input type="bb_lahir" name="bb_lahir" class="form-control" id="bb_lahir" value="{{ $Posyandu->bb_lahir }}" aria-describedby="bb_lahir" >
					</div>
					<div class="form-group">
						<label for="tb_lahir">Tb_Lahir</label>
						<input type="tb_lahir" name="tb_lahir" class="form-control" id="tb_lahir" value="{{ $Posyandu->tb_lahir }}" aria-describedby="tb_lahir" >
					</div>
					
					<form method="post" action="">
						<button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin menyimpan perubahan ini?');">Submit</button>
						<a class="btn btn-success" href="{{ route('posyandu.index') }}">Kembali</a>
					</form>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection