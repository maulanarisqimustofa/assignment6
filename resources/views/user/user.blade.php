@extends('template')

@section('title')
User
@endsection

@section('header')
<h4>User</h4>
@endsection

@section('main')
Ini Halaman User
<a href="{{url('/user.tambah')}}">Tambah User</a>
@endsection