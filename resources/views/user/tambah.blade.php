@extends('template')
 
@section('title')
Kategori Buku
@endsection
 
@section('header')
<h4>Tambah User</h4>
@endsection
 
@section('main')
<form action ="{{ url('user') }}" method="POST">
@csrf
<label>Nama</label>
<input type="text" name="nama"><br>
<label>Email</label>
<input type="text" name="email"><br>
<input type="submit" value="Simpan">
</form>
@endsection
