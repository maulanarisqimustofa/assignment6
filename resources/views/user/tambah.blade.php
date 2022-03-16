@extends('template')

@section('title')
User
@endsection

@section('header')
<div style="border: solid; width: fit-content; margin: auto; padding: 5px">
    <div style="width: fit-content; float: left; margin-left: 2px">
        <h4>Tambah User</h4>
    </div>
    <div style="float: right; margin: 2px">
        <a href="{{url('user')}}"> <input type="button" class="btn btn-secondary" value="Back" /></a>
    </div>
    <br>
    <br>
    @endsection

    @section('main')
    <div>
        <form action="{{ url('user') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama">
            </div>
            <br>
            <div class="form-group">
                <label>Email </label>
                <input type="email" name="email">
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Simpan">
        </form>
    </div>
</div>
@endsection