@extends('template')
 
@section('title')
User
@endsection
 
@section('header')
<h4>Edit User</h4>
@endsection
 
@section('main')
<form action ="{{ url('user.'.$user->id) }}" method="POST">
@csrf
<input type="hidden" value="PUT" name="_method">
<label>Nama</label>
<input type="text" name="nama" value="{{ $user->nama}}"><br>
<label>Email</label>
<input type="text" name="email" value="{{ $user->email}}"><br>
<input type="submit" value="Simpan">
</form>
@endsection
