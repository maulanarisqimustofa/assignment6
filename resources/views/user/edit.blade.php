@extends('template')
 
@section('title')
User
@endsection
 
@section('header')
<div style="border: solid; width: fit-content; margin: auto; padding: 5px">
<div style="width: fit-content; float: left; margin-left: 2px">
    <h4>Edit User</h4>
    </div>
<div style="float: right; margin: 2px">
<a href="{{url('user')}}"> <input type="button" class="btn btn-secondary" value="Back" /></a>
</div>
<br>
<br>
@endsection
 
@section('main')
<form action ="{{ url('user.'.$user->id) }}" method="POST">
@csrf
<div class="form-group">
<input type="hidden" value="PUT" name="_method">
<label>Nama</label>
<input type="text" name="nama" value="{{ $user->nama}}">
</div>
<br>
<div class="form-group">
<label>Email</label>
<input type="email" name="email" value="{{ $user->email}}"><br>
</div>
<br>
<input type="submit" class="btn btn-warning" value="Edit">
</form>
</div>
@endsection
