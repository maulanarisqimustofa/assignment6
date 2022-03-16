@extends('template')

@section('title')
User
@endsection

@section('header')
@endsection

@section('main')
<div style="width: fit-content; float: left; margin-left: 10px">
    <h1>CRUD Laravel User</h1>
</div>
<div style="float: right; margin: 10px">
    <a href="{{url('user.create')}}"> <input type="button" class="btn btn-primary" value="Tambah" /></a>
</div>


<div style="margin: 10px;">
    <table border='1' class="table">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th width="50%">Aksi</th>
        </thead>
        <tbody>
            @if (!empty($DataUser))
            @php
            $i=1
            @endphp
            @foreach($DataUser as $key => $user)
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{url('/user.'.$user->id.'.edit')}}">
                        <input type="button" class="btn btn-secondary" value="Edit" /></a>
                    <form action="{{url('/user.'.$user->id)}}" method="Post" onsubmit="return confirm('Apakah data ingin dihapus?')">
                        @csrf
                        <input type="hidden" value="DELETE" name="_method">
                        <input type="submit" class="btn btn-danger" value="Delete">
                </td>

            </tr>
            @php
            $no++
            @endphp
            @endforeach
            @else
            <p>Tidak ada user</p>
            @endif
        <tbody>
    </table>
    <div>
        <ul class="pagination">
            {{ $DataUser->links() }}
        </ul>
    </div>
</div>
@endsection