@extends('layout/main')


@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-8">
				<h2>Form Ubah Data Mahasiswa</h2>

				<form method="POST" action="/students/{{$student->id}}">
					@method('patch')
					@csrf <!-- menghindari  page expired, ini caranya laravel untuk menghindari hacking-->
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{$student->nama}}">
				    @error('nama')
				    	<div class="invalid-feedback">{{ $message }}</div>
				    @enderror
				  </div>

				  <div class="form-group">
				    <label for="nrp">NRP</label>
				    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan nrp" name="nrp" value="{{$student->nrp}}">
				    @error('nrp')
				    	<div class="invalid-feedback">{{ $message }}</div>
				    @enderror
				  </div>

				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email" value="{{$student->email}}">
				    @error('email')
				    	<div class="invalid-feedback">{{ $message }}</div>
				    @enderror
				  </div>

				  <div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{$student->jurusan}}">
				    @error('jurusan')
				    	<div class="invalid-feedback">{{ $message }}</div>
				    @enderror
				  </div>

				  <button type="submit" class="btn btn-primary">Ubah Data!</button>
				</form>
				
			</div>
		</div>
	</div>

@endsection