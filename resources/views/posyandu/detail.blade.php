@extends('posyandu.layout')
@section('content1')
<div class="container mt-5">
	<div class="row justify-content-center align-items-center">
		<div class="card" style="width: 24rem;">
			<div class="card-header">
				Detail Data Bayi
			</div> 
			<div class="card-body">
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><b>No_Urut: </b>{{$Posyandu->no_urut}}</li>
					<li class="list-group-item"><b>Nama: </b>{{$Posyandu->nama}}</li>
					<li class="list-group-item"><b>Alamat: </b>{{$Posyandu->alamat}}</li>
					<li class="list-group-item"><b>Tanggal_Lahir: </b>{{$Posyandu->tanggal_lahir}}</li>
					<li class="list-group-item"><b>Bb_Lahir: </b>{{$Posyandu->bb_lahir}}</li>
					<li class="list-group-item"><b>Tb_Lahir: </b>{{$Posyandu->tb_lahir}}</li>
				</ul>
			</div>
			<a class="btn btn-success mt-3" href="{{ route('posyandu.index') }}">Kembali</a>
		</div>
	</div>
</div>
@endsection