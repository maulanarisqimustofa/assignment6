@extends('template')

@section('title')
User
@endsection

@section('header')
@endsection

@section('main')
<a href="{{url('user.create')}}">Tambah user</a>
<table border='1' class="table">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th width="50%">Aksi</th>
    </thead>
    <tbody>
        @if (!empty($user))
        @php
        $i=1
        @endphp
        @foreach($user as $user)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="{{url('/user.'.$user->id.'.edit')}}">
                    <input type="button" class="btn btn-secondary" value="Edit" /></a>
            <form action="{{url('/user.'.$user->id)}}" method="Post" onsubmit="return confirm('Apakah data ingin dihapus?')">
                    @csrf
                    <input type="hidden" value="DELETE" name="_method">
                    <input type="submit" class="btn btn-danger" value="Delete" />
            </td>

        </tr>
        @php
        $i++
        @endphp
        @endforeach
        @else
        <p>Tidak ada user</p>
        @endif
    <tbody>
</table>

@endsection